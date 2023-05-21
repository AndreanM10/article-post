<?php
use Intervention\Image\ImageManagerStatic as Image;
require_once '../header.php';

$_SESSION['is_admin'] = true;

// 過濾外來變數
$op    = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'create';
$id    = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$file  = isset($_REQUEST['file']) ? filter_var($_REQUEST['file'], FILTER_SANITIZE_STRING) : '';
$thumb = isset($_REQUEST['thumb']) ? filter_var($_REQUEST['thumb'], FILTER_SANITIZE_STRING) : '';

// 流程控制
switch ($op) {
    // 觀看單一文章
    case 'show':
        $news = show($id);
        add_count($id);
        $smarty->assign('news', $news);
        break;
    case "edit":
        $news = edit($id);
        $smarty->assign('news', $news);
        break;
    case "store":
        $id = store();
        //執行後轉向
        header("location: ../index.php?op=show&id=$id");
        exit;
    case "update":
        update($id);
        //執行後轉向
        header("location: ../index.php?op=show&id=$id");
        exit;
    // 刪除圖片
    case 'destroy_file':
        destroy_file($id, $file, $thumb);
        header("location: index.php?op=edit&id=$id");
        exit;
    // 刪除文章
    case 'destroy':
        destroy($id);
        header("location: ../index.php");
        exit;
    default:
        $op = 'create';
        $news = create();
        $smarty->assign('news', $news);
        break;
}

$smarty->assign('year', 0);
$smarty->assign('cate_id', 0);
$smarty->assign('op', $op);
$smarty->display('index.tpl');

// 刪除文章
function destroy($id){
    global $db;
    // 取出所有檔案後依序刪除
    $files = get_files($id);
    foreach ($files as $file => $thumb) {
        destroy_file($id, $file, $thumb);
    }
    // 刪除縮圖目錄
    rmdir(_PATH . "/uploads/$id/thumbs");
    // 刪除原圖目錄
    rmdir(_PATH . "/uploads/$id");

    // 刪除資料庫資料
    $sql = "DELETE FROM `articles` WHERE `id` = ?";
    $sth = $db->prepare($sql);
    $sth->execute([$id]);
}
// 刪除檔案
function destroy_file($id, $file, $thumb){
    // 刪除原圖檔或影片
    if (file_exists(_PATH . "/uploads/$id/$file")) {
        unlink(_PATH . "/uploads/$id/$file");
    }
    // 刪除縮圖
    if (file_exists(_PATH . "/uploads/$id/thumbs/$thumb")) {
        unlink(_PATH . "/uploads/$id/thumbs/$thumb");
    }
}
// 更新文章
function update($id){
    global $db;
    $sql = "UPDATE `articles` SET
    `title` = ?, `info` = ?, `date` = ?, `content` = ?, `cate_id` = ?
    WHERE `id` = ?";
    $sth    = $db->prepare($sql);
    $values = [
        $_POST['title'],
        $_POST['info'],
        $_POST['date'],
        $_POST['content'],
        $_POST['cate_id'],
        $id,
    ];
    $sth->execute($values);

    // 檔案上傳
    uploads($id);
    return $id;
}
// 建立文章
function create(){
    $news = [
        'id'      => '',
        'title'   => '',
        'info'    => '',
        'date'    => date('Y-m-d'),
        'content' => '',
        'cate_id' => 3,
    ];
    return $news;
}
// 編輯
function edit($id){
    $news = show($id);
    return $news;
}
// 儲存
function store(){
    global $db;
    // 寫入資料庫
    $sql    = "INSERT INTO `articles` (`title`, `info`, `date`, `content`, `cate_id`) VALUES(?, ?, ?, ?, ?)";
    $sth    = $db->prepare($sql);
    $values = [
        $_POST['title'], $_POST['info'], $_POST['date'], $_POST['content'], $_POST['cate_id'],
    ];
    $sth->execute($values);
    // 取得該資料的流水號
    $id = $db->lastInsertId();

    // 上傳檔案
    uploads($id);
    return $id;
}
// 上傳檔案
function uploads($id){
    // 依序讀出每個檔案的順序 $i
    foreach ($_FILES['files']['name'] as $i => $filename) {
        if (!$filename) {
            break;
        }

        // 檢查檔案是否上傳成功
        if ($_FILES['files']['error'][$i] === 0) {

            // 讓檔案放在文章編號的目錄下，比較方便管理，檢查有無該目錄
            if (!is_dir(_PATH . "/uploads/{$id}")) {
                // 若無建立原檔目錄
                mkdir(_PATH . "/uploads/{$id}");
                // 順便建立縮圖目錄
                mkdir(_PATH . "/uploads/{$id}/thumbs");
            }

            // 暫存檔來源
            $file = $_FILES['files']['tmp_name'][$i];
            // 抓取副檔名
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            // 前置字串
            $prefix = date("YmdHis");
            // 欲放置原圖到哪裡
            $dest = _PATH . "/uploads/{$id}/{$prefix}-{$i}.{$ext}";

            if ($ext == 'mp4') {
                // 縮圖欲放置到哪裡
                $thumb_dest = _PATH . "/uploads/{$id}/thumbs/{$prefix}-{$i}.jpg";

                // 建立物件
                $ffmpeg = FFMpeg\FFMpeg::create(array(
                    'ffmpeg.binaries'  => _PATH . '/ffmpeg/bin/ffmpeg.exe',
                    'ffprobe.binaries' => _PATH . '/ffmpeg/bin/ffprobe.exe',
                    'timeout'          => 3600, // 底層進程的時間上限
                    'ffmpeg.threads' => 12, // FFMpeg 應該使用的線程數
                ));
                // 開啟影片
                $video = $ffmpeg->open($file);
                // 擷取第N秒的話格，並存檔
                $video
                    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
                    ->save($thumb_dest);

                // 再將大圖縮成480小圖
                $image = Image::make($thumb_dest)->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($thumb_dest);

                // 將檔案移至指定位置
                if (!move_uploaded_file($file, $dest)) {
                    die("無法將檔案{$file}上傳至指定位置{$dest}");
                }

            } else {
                // 縮圖欲放置到哪裡
                $thumb_dest = _PATH . "/uploads/{$id}/thumbs/{$prefix}-{$i}.{$ext}";

                // 將原圖縮成1600大圖
                $image = Image::make($file)->resize(1600, 1600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($dest);

                // 再將大圖縮成480小圖
                $image = Image::make($dest)->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($thumb_dest);
            }

        } else {
            die("上傳錯誤：{$_FILES['files']['error'][$i]}");
        }
    }
}
<?php
use JasonGrimes\Paginator;

function index($p, $cate_id = 0, $keyword = '', $year = ''){
    global $db;
    $where = '';
    $all_news = $value = [];
    // 是否要分類
    if ($cate_id) {
        // 是否要分類
        $where = "WHERE `cate_id`= ?";
        $value = [$cate_id];
    } elseif ($keyword) {
        // 關鍵字搜尋
        $where = "WHERE `title` like ? or `info` like ? or `content` like ? or `date` like ?";
        $value = ["%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%"];
    } elseif ($year) {
        // 年度搜尋
        $where = "WHERE `date` like ?";
        $value = ["{$year}%"];
    }
    // 根據條件計算文章總數 $total
    $sql = "SELECT count(*) FROM `articles` $where ORDER BY `date` DESC";
    $sth = $db->prepare($sql);
    $sth->execute($value);
    list($total) = $sth->fetch(PDO::FETCH_NUM);
    // 每頁顯示文章數
    $news_per_page = _NEWS_PER_PAGE;

    // 產生分頁內容
    $paginator = new Paginator($total, $news_per_page, $p, "index.php?p=(:num)&cate_id={$cate_id}&keyword={$keyword}&year={$year}");    
    $all_news['next_pages'] = $paginator->getNextUrl(); // 上一頁網址
    $all_news['prev_pages'] = $paginator->getPrevUrl(); // 下一頁網址
    $all_news['pages'] = $paginator->getPages(); // 分頁工具所需資料
    
    // 計算從哪筆資料開始讀取
    $start = ($p - 1) * $news_per_page;

    // 根據計算結果來讀取資料
    $sql = "SELECT * FROM `articles` $where ORDER BY `date` DESC LIMIT ? , ?";
    $sth = $db->prepare($sql);
    $value[] = $start;
    $value[] = $news_per_page;
    $sth->execute($value);
    $all_news['data'] = [];
    while ($news = $sth->fetch(PDO::FETCH_ASSOC)) {
        // 取得縮圖
        $news['files'] = get_thumbs($news['id']);
        // 產生摘要
        $news['summary'] = get_summary($news['content']);
        // 過濾整個陣列
        $news = filter_var_array($news, FILTER_SANITIZE_STRING);
        $all_news['data'][] = $news;
    }
    return $all_news;
}
// 顯示一篇文章
function show($id){
    global $db;
    $sql = "SELECT * FROM `articles` WHERE `id` = ?";
    $sth = $db->prepare($sql);
    $sth->execute([$id]);
    $news = $sth->fetch(PDO::FETCH_ASSOC);
    // 取得縮圖
    $news['files'] = get_thumbs($id);
    $news = filter_var_array($news, FILTER_SANITIZE_STRING);
    return $news;
}
// 點閱數+1
function add_count($id){
    global $db;
    $sql = "UPDATE `articles` SET `counter` = `counter` + 1
    WHERE `id` = ?";
    $sth    = $db->prepare($sql);
    $values = [$id];
    $sth->execute($values);
}
// 取得圖片
function get_files($id){
    // 取得相關圖檔或影片
    $dir = _PATH . "/uploads/{$id}/";

    // Open a known directory, and proceed to read its contents
    $files = [];
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (filetype($dir . $file) != 'dir') {
                    // 抓取副檔名
                    $ext          = pathinfo($file, PATHINFO_EXTENSION);
                    $files[$file] = ($ext == 'mp4') ? str_replace('.mp4', '.jpg', $file) : $file;
                }
            }
            closedir($dh);
        }
    }
    return $files;
}
// 取得縮圖
function get_thumbs($id){
    // 原檔目錄
    $dir = _PATH . "/uploads/{$id}/";
    // 縮圖目錄
    $thumb_dir = _PATH . "/uploads/{$id}/thumbs/";
    // 初始該文章包含的檔案
    $files = [];
    // 若該目錄存在的話
    if (is_dir($dir)) {
        // 就開啟該目錄
        if ($dh = opendir($dir)) {
            // 讀取底下所有檔案
            while (($file = readdir($dh)) !== false) {
                // 只抓出檔案（不要目錄）
                if (filetype($dir . $file) != 'dir') {
                    // 取得副檔名
                    $ext = pathinfo($file, PATHINFO_EXTENSION);
                    // 若副檔名是mp4，就將縮圖副檔名取代改為 jpg
                    $files[$file] = ($ext == 'mp4') ? str_replace('.mp4', '.jpg', $file) : $file;
                }
            }
            closedir($dh);
        }
    }
    return $files;
}
// 製作摘要
function get_summary($content){
    // 若是本文超過設定字數就加上...
    $more = mb_strlen($content) > _SUMMARY_COUNT ? '...' : '';
    // 產生摘要
    $summary = mb_substr($content, 0, _SUMMARY_COUNT) . $more;
    return $summary;
}
// 年度文章數
function article_count(){
    global $db;
    $sql = "SELECT COUNT(*) as count, LEFT(`date`,4) as year
        FROM `articles`
        GROUP BY year
        ORDER BY year DESC";
    $sth = $db->prepare($sql);
    $sth->execute();
    $data = [];
    while ($count = $sth->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $count;
    }
    return $data;
}
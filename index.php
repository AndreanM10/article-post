<?php
require_once 'header.php';

// 過濾外來變數
$p = isset($_REQUEST['p']) ? (int) $_REQUEST['p'] : 1;
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'index';
$cate_id = isset($_REQUEST['cate_id']) ? (int) $_REQUEST['cate_id'] : 0;
$keyword = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword'], FILTER_SANITIZE_STRING) : '';
switch ($op) {
    // 觀看單一文章
    case "show":
        add_count($id);
        $news = show($id);
        $smarty->assign('news', $news);
        break;

    // 預設為文章列表
    default:
        $all_news = index($p, $cate_id, $keyword, $year);
        $smarty->assign('all_news', $all_news);
        break;
}

$all_news = index($p);
// 將所有文章送至樣板
$smarty->assign('op', $op);
$smarty->assign('cate_id', $cate_id);
$smarty->display('index.tpl');
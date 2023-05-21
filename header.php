<?php
session_start();
require_once 'config.php';
require_once 'vendor/autoload.php';
require_once "function.php";

try{
    $db = new PDO("mysql:host={$dbhost};dbname={$dbname};charset={$dbcharacter}", $dbuser, $dbpasswd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //讓資料庫顯示錯誤原因
    // echo "連線成功";
} catch (PDOException $e) {
    die("無法連上資料庫：" . $e->getMessage());
}
// 是否為管理員
$is_admin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;
$year = isset($_GET['year']) ? (int) $_GET['year'] : 0;

$smarty = new Smarty;
$smarty->setTemplateDir(_PATH . '/templates/');
$smarty->setCompileDir(_PATH . '/templates_c/');
$smarty->setConfigDir(_PATH . '/configs/');
$smarty->setCacheDir(_PATH . '/cache/');

// 將網址及實體路徑送到樣板
$smarty->assign('path', _PATH);
$smarty->assign('url', _URL);
$smarty->assign('article_count', article_count());
$smarty->assign('categories', $categories);
$smarty->assign('is_admin', $is_admin);
$smarty->assign('year', $year);
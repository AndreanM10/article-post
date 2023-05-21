<?php
$dbhost = 'localhost'; //一般是 localhost 或 127.0.0.1
$dbuser = 'root'; //一般是 root
$dbpasswd = '';
$dbname = 'blog';
$dbcharacter = 'utf8mb4'; //一般是 utf8
// 專案絕對路徑
define('_PATH', 'D:/xampp8/htdocs/article');
// 專案網址
define('_URL', 'http://localhost/article');
// 摘要字數
define('_SUMMARY_COUNT', 130);
// 每頁顯示文章數
define('_NEWS_PER_PAGE', 3);
// 分類設定
$categories = [
    1 => '榮譽榜',
    2 => '傑出校友',
    3 => '校園新聞',
    4 => '海外交流',
];
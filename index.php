<?php
define('APP', true);

require __DIR__ . '/models/news.php';


$news = new News();
$res = $news->news_getAll();



include __DIR__ . '/views/main.php';
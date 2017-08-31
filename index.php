<?php
define('APP', true);

require __DIR__ . '/models/news.php';

// Вывод всех новостей
$news = news_getAll();


include __DIR__ . '/views/main.php';
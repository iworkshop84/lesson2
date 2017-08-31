<?php
define('APP', true);

require __DIR__ . '/models/news.php';

// Добавление новой новости
if(isset($_POST['addnews'])){
    $data = [];

    if(!empty($_POST['name'])){
        $data['name'] = $_POST['name'];
    }

    if(!empty($_POST['content'])){
        $data['content'] = $_POST['content'];
    }

    if(isset($data['name']) && isset($data['content'])){
        news_add($data);
        header('Location: /index.php');
        exit;
    }
}



include __DIR__ . '/views/edit.php';
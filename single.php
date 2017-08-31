<?php
define('APP', true);

require __DIR__ . '/models/news.php';

if (isset($_GET['id'])){
    $data = [];

    if(!empty($_GET)){
        $data['id'] = $_GET['id'];
    }

    if(isset($data)){
        $singlnew = news_getSingle($data);
        if(empty($singlnew)){
            header('Location: /index.php');
            exit;
        }
    }
}
else{
    header('Location: /index.php');
    exit;
}



include __DIR__ . '/views/single.php';
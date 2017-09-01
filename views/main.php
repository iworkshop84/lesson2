<?php defined('APP') or die('Error 404');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/views/style.css" type="text/css" media="screen" />

    <title>Главная страница</title>
</head>
<body>

<div id="page">
    <div id="header">
        <div class="logo"><a href="/"></a>
        </div></div>
    <div id="posts">
        <h2>Главная страница</h2>



        <?php foreach ($res as $item): ?>
            <h3><a href="<?= 'single.php?id=' . $item['news_id']?>"><?= $item['news_name']; ?></a></h3>
            <p>Дата публикации: <?= date("d-m-Y H:i:s",strtotime($item['news_date'])); ?><p>
            <p><?= $item['news_content']; ?></p>
        <?php endforeach; ?>




    </div>
    <div id="sidebar" >
        <div class="widget">
            <div class="widgettitle">Меню</div>
            <div class="widgetcont">

                <p><a href="/index.php">Главная</a></p>
                <p><a href="/addnews.php">Добавить новость</a></p>

            </div>
        </div>
    </div>
</div>

</body>
</html>

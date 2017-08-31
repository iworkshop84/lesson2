<?php
defined('APP') or die('Error 404');

function sql_connect(){
    $link = mysqli_connect(
        'localhost',  /* Хост, к которому мы подключаемся */
        'root',       /* Имя пользователя */
        '',   /* Используемый пароль */
        'mysite');     /* База данных для запросов по умолчанию */
    if (!$link) {
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    return $link;
}


function sql_queri($sql){

    $link = sql_connect();
    $res = mysqli_query($link, $sql);

    $ret = [];
    while (false != $row = mysqli_fetch_assoc($res)){
        $ret[] = $row;
    }
    return $ret;
}


function sql_queri_single($sql){

    $link = sql_connect();
    $res = mysqli_query($link, $sql);

    $ret = [];
    while (false != $row = mysqli_fetch_assoc($res)){
        $ret = $row;
    }
    return $ret;
}




function sql_exec($sql){

    $link = sql_connect();
    mysqli_query($link, $sql);
}
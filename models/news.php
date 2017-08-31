<?php
defined('APP') or die('Error 404');

require __DIR__ . '/sql.php';

function news_add($data){
    $sql = "INSERT INTO news(`news_name`, `news_content`, `news_date`)
    VALUES
    ('". $data['name'] ."', '". $data['content'] ."', NOW())";
    return sql_exec($sql);
}

function news_getAll(){
    $sql = "SELECT * FROM `news` ORDER BY news_date DESC";
    return sql_queri($sql);
}

function news_getSingle($data){
    $sql = "SELECT * 
    FROM `news`
    WHERE news_id = '" . $data['id'] . "'";
    return sql_queri_single($sql);
}
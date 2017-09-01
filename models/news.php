<?php
defined('APP') or die('Error 404');

//require __DIR__ . '/sql.php';
require __DIR__ . '/safemysql.class.php';
/*
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
*/


abstract class Article{
    public $news_id;
    public $news_name;
    public $news_content;
    public $news_date;
}

class News extends Article{

    public function news_getAll(){
        $db = new SafeMySQL();
        $res = $db->getAll("SELECT * FROM news ORDER BY news_date DESC");
        return $res;
    }

    public function news_getS($data){
        $db = new SafeMySQL();
        $res = $db->getRow("SELECT * 
        FROM `news`
        WHERE news_id = '" . $data['id'] . "'");
        return $res;
    }

    public function news_AddNew($data){
        $db = new SafeMySQL();
        $db->query("INSERT INTO news(`news_name`, `news_content`, `news_date`)
        VALUES
        ('". $data['name'] ."', '". $data['content'] ."', NOW())");
    }
}
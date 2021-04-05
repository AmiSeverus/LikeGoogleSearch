<?php

define ('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

$config = include 'main.php';
include 'mysql.php';

if ($_GET['text']){
    $var = $_GET['text'];
    $mysql = new mySql($config['db']['local']);//создание объекта для работы с бд и соединение с ней
    $res = $mysql->querySelect("select name from User where name like '%{$mysql->escape($var)}%'");
    echo json_encode($res);
}

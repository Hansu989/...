<?php

require_once 'add.php';
require_once 'headers.php';
require_once 'delete.php';
require_once 'index.php';

function openDb() {
    $db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}

function returnError(PDOEXCEPTION $pdoex) {
    echo reader('HTTP/1.1 500 Internal Server Error');
    $error = array('error' => $pdoex->getMessage());
    echo json_encode($error);
    exit;
}
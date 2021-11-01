<?php
require_once 'index.php';
require_once 'headers.php';
require_once 'delete.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD']=== 'OPTIONS') {
    return 0;
}

$input = json_decode(file_get_contents('php://input'));
$id = filter_var($input,FILTER_SANITIZE_STRING);




try { 

    $db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $query = $db->prepare('delete from task where id=(:id)');
    $query->bindvalue(':id',$id,PDO::PARAM_INT);
    $query->execute();

    

    
    $data = array('id' => $id);
    header('HTTP/1.1 200 OK');
    print json_encode($data);
    } catch (PDOException $pdoex) {
        header('HTTP/1.1 500 Internal Server Error');
        $error = array('error' => $pdoex->getMessage());
        print json_encode($error);
    }
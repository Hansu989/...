<?php


require_once 'add.php';
require_once 'headers.php';
require_once 'delete.php';
require_once 'functions.php';





try { 

$db = openDb();

$sql = "select * from task";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);

header('HTTP/1.1 200 OK');
print json_encode($results);
} catch (PDOException $pdoex) {
    header('HTTP/1.1 500 Internal Server Error');
    $error = array('error' => $pdoex->getMessage());
    print json_encode($error);
}
?>

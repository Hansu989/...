<?php
require_once 'add.php';
require_once 'index.php';
require_once 'delete.php';
require_once 'functions.php';


header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Accept, Content-Type','Access-Control-Allow-Header');
header('Access-Control-Max-Age: 3600');

if ($_SERVER['REQUEST_METHOD']=== 'OPTIONS') {
    return 0;
}
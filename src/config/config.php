<?php 

$host = 'localhost';
$dbname = 'goose';
$user = 'root';
$password = '';

$connect = new PDO('mysql:host='.$host.';dbname='.$dbname.'; charset=utf8', $user, $password,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ));

?>
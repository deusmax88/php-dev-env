<?php
$host = 'mysql';
$db = 'testdb';
$user = 'root';
$password = 'test123';

try{
    $pdo = new PDO("mysql:dbname=$db;host=$host", $user, $password);
}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage()."<br />";
}

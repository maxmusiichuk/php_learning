<?php
$dns ='mysql:host=localhost;dbname=test;charset=utf8';

try{
    $pdo=new PDO($dns,'root','');
} catch (PDOException $e){
    die('Connection failed: ' . $e->getMessage());
}

echo 'Connected to database: success'

?>

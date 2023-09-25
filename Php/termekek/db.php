<?php
$dns = "mysql:host=localhost;dbname=shop";
$dbtipus = "root";
$dbtermek = "";

try{
$pdo = new PDO($dns,$dbtipus,$dbtermek);
$pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e){
    echo "A csatlakozás sikertelen" . $e ->getMessage();
}
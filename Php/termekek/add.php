<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $tipus = $_POST["tipus"];
    $termek = $_POST["termek"];

    try{
        require_once "db.php";
        $query = "INSERT INTO product (tipus, termek) VALUES (:tipus, :termek);";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":tipus",$tipus);
        $stmt->bindParam(":termek",$termek);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
       

        header("Location ./index.php");
        die();

    }catch(PDOException $e){
        die("Sikertelen" . $e -> getMessage());
    }
}else{
    header("Location: ./index.php");
}
<?php
$host="localhost";
$uername="root";
$passwoed=null;

try {
    $conn= new PDO("mysql:host=$host;dbname=collage",$uername,$passwoed);
    $conn->setATTribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection is successfully";
}catch(PDOException $err){
    echo "connection is failed".$err->getMessage();
}

?>
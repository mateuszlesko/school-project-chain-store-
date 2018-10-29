<?php

$details = [];

function getShop($pdo,$id){
    $query = $pdo->prepare("Select * from sklep where ID=:id;");
    $query->bindValue(':id',$id);
    $query->execute();
    return $query->fetch();
    }
    
    include 'connection.php';
    $q = getShop($pdo,$_GET['ShopID']);
   


include 'single.html.php';


?>
<?php

try{
    include 'connection.php';
    $query = $pdo->prepare("UPDATE sklep set Wojewodztwo =:Wojewodztwo, Miasto=:Miasto,Ulica=:Ulica,Kontakt=:Kontakt where ID=:id");
    $query->execute(array('id'=>$_POST['ID'],
    'Wojewodztwo'=>$_POST['W'],
    'Miasto'=>$_POST['M'],
    'Ulica'=>$_POST['U'],
    'Kontakt'=>$_POST['K']));

header('location:shop.php');
}

catch(PDOException $e){
    echo 'error '.$e;
}

?>
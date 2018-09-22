<?php

$details = [];

include 'connection.php';
$id = $_GET['ShopID'];
$sql = "Select * from sklep where ID=$id;";
$result = $pdo->query($sql);



while($row=$result->fetch()){
$details[]=array('ID'=>$id,
'Kontakt'=>$row['Kontakt'],
'Miasto'=>$row['Miasto'],
'Nazwa sklepu'=>$row['Nazwa sklepu'],
'Ulica'=>$row['Ulica'],
'Wojewodztwo'=>$row['Wojewodztwo']
);
}
include 'single.html.php';


?>
<?php
function updateShop($pdo,$id){
try{
    include 'connection.php';
    $query = $pdo->prepare("UPDATE sklep set  Miasto=:Miasto,Ulica=:Ulica,Kontakt=:Kontakt where ID=:id");
    $query->execute(array('id'=>$id,
    'Miasto'=>$_POST['M'],
    'Ulica'=>$_POST['U'],
    'Kontakt'=>$_POST['K']));

header('location:shop.php');
}

catch(PDOException $e){
    echo 'error '.$e;
}
}
updateShop(null,$_POST['ID']);
?>
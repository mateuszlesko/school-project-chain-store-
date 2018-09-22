<?php
ini_set('display_error','On');
error_reporting(E_ALL);

$W=$_POST['W'];
$M=$_POST['M'];
$U=$_POST['U'];
$K=$_POST['K'];


try{
    
    include 'connection.php';
    $sql = "INSERT INTO sklep(Wojewodztwo,Miasto,Ulica,Kontakt) values (:W,:M,:U,:K);";

    $smpt=$pdo->prepare($sql);
    $smpt->execute(array(
        'W'=>$W,
        'M'=>$M,
        'U'=>$U,
        'K'=>$K));
        header('location:dbfunctions.php');
        
    
}catch(PDOException $e){
    die();
    echo 'nie udalo sie. '.$e -> getMessage().' in '.getFile().' on '.$e->getLine();
    
}
function query($pdo,$params=[]){

}
include 'addShop.html.php';
?>
<?php
$pdo;

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=zsti;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
    }catch(PDOException $e){

        echo 'nie udalo sie. '.$e -> getMessage().' in '.$e->getFile().' on '.$e->getLine();
    }


?>
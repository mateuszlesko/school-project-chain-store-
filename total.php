<?php

function total(){
    include 'connection.php';
    $query = $pdo->prepare('Select COUNT(*) from sklep');
    
    $query->execute();
    $row=$query->fetch();
    
    return $row[0];
}
total($pdo);



?>
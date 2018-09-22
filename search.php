<?php



$q = $_POST['input'];
$cr =0;
$results = array();
include 'h.php';

try{
    include 'connection.php';
    $sql = "Select Miasto, Ulica from sklep; ";    
    foreach($pdo->query($sql) as $result ){
        if(levenshtein(metaphone($q),metaphone($result['Miasto']))<1){
            array_push($results,$result['Miasto']);
            array_push($results,$result['Ulica']);
            $cr++;
        }
        else if(levenshtein(metaphone($q),metaphone($result['Ulica']))<1){
            array_push($results,$result['Miasto']);
            array_push($results,$result['Ulica']);
            $cr++;
        }
    }
    echo '<h3>Dla '.$q.' znaleziono rekordow '.$cr.' : </h3> <br>';
    foreach($results as $result){
        echo $result.' status: '.$h.'<br>';
        
    }
    
}catch(PDOException $e){
    die();
    echo 'nie udalo sie. '.$e -> getMessage().' in '.$e->getFile().' on '.$e->getLine();
}




?>
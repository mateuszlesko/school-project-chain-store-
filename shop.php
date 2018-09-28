<?php

$output = '';
$pdo = null;
    global $shops;
    
    $shops = [];
    try{
        include 'connection.php';
    $sql = "Select Miasto, Ulica, Wojewodztwo, ID, Kontakt from sklep";    
    $result = $pdo->query($sql);
        while($row = $result->fetch()){
            $shops[]=array('Miasto'=>$row['Miasto'],'Ulica'=>$row['Ulica'],'Wojewodztwo'=>$row['Wojewodztwo'],'Kontakt'=>$row['Kontakt'],'ID'=>$row['ID']);
        }

    }catch(PDOException $e){
       
    }
    rsort($shops);
    foreach($shops as $s ){
        $output.="<div class='container'>";
        $output.="<div class='row align-items-center'>";
        $output.="<div class='col'>";
        $output.="<h3>".htmlspecialchars($s['Miasto'],ENT_QUOTES)."</h3>";
        $output.="</div>";
        $output.="<div class='col'>";
        $output.="<p>".htmlspecialchars($s['Ulica'],ENT_QUOTES).'</p>';
        $output.="</div>";
        $output.="<div class='col'>";
        $output.="<form action='SingleShop.php' method='get'>";
        $output.="<input type='hidden' name='ShopID' class='btn btn-primary' value=".$s['ID'].">";
        $output.="<input type='submit' value='Szczegoly' class='btn'>";
        $output.="</form>";
        $output.="</div>";
        $output.="<div class='col'>";
        $output.="<form action='deleteShop.php' method='post'>";
        $output.="<input type='hidden' name='ShopID' class='btn btn-primary' value=".$s['ID'].">";
        $output.="<input type='submit' class='btn btn-danger' value='Usun'>";
        $output.="</form>";
        $output.="</div>";
        $output.="<form action='updateShop.html.php' method='get'>";
        $output.="<input type='hidden' name='ShopID' class='btn btn-primary' value=".$s['ID'].">";
        $output.="<input type='hidden' name='ShopTown' class='btn btn-primary' value=".$s['Miasto'].">";
        $output.="<input type='hidden' name='ShopContact' class='btn btn-primary' value=".$s['Kontakt'].">";
        $output.="<input type='hidden' name='ShopStreet' class='btn btn-primary' value=".str_replace(" ","",htmlspecialchars($s['Ulica'],ENT_QUOTES)).">";
        $output.="<input type='submit' class='btn ' value='Edytuj'>";
        $output.="</form>";
        $output.="</div>";
        $output.="</div>";
        $output.="</div>";
    }

    include 'new2.html.php';
  

    



?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<?php

$nameOfOrder = '';

//dokoncz formularz i skrypt php
function getPriceOrder($o){

$price=0;
    switch($o){
        case 1:
        $price = 100;
        $nameOfOrder = 'zlozenie komputera';
        break;
        case 2:
        $price = 200;
        $nameOfOrder = 'stworzenie lokalnej sieci komputerowej';
        break;
        case 3:
        $price = 300;
        $nameOfOrder = 'hosting';
        break;
        case 4:
        $price = 400;
        $nameOfOrder = 'stworzenie bazy danych';
        break;

        default:
        $price = 0;
        $nameOfOrder = '';
        break;

    }
    return $price;
    
  
}
function getNameOrder($o){
  $name = "";
  switch($o){
    case 1:
    
    $name = 'zlozenie komputera';
    break;
    case 2:
   
    $name = 'stworzenie lokalnej sieci komputerowej';
    break;
    case 3:
    
    $name = 'hosting';
    break;
    case 4:
   
    $name = 'stworzenie bazy danych';
    break;

    default:
    
    $name = '';
    break;
  }
  return $name;
}
function seeOrder(){
  $name = $_POST['M']; 
$surname = $_POST['N'];
$email = $_POST['E'];
$date = date('d.M.Y h:i');
$price = getPriceOrder($_POST['W']);
$nameOfOrder = getNameOrder($_POST['W']);

  echo "<ul class='list-group'>
  <li class='list-group-item active'>Zamowienie: $name $surname </li>
  <li class='list-group-item'>Zlecona usluga: $nameOfOrder</li>
  <li class='list-group-item'>Data zlozenia zamowienia: $date</li>
  <li class='list-group-item'>Email na ktory skontaktujemy sie: $email </li>
  <li class='list-group-item'>Cena zamowienia: $price zl</li>
  
</ul>";
}
seeOrder();

?>
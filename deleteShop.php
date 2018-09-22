<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<?php
try{
    
    include 'connection.php';
    $shopId = $_POST['ShopID'];
    $sql = "Delete from sklep where id=:id";
    $smpt = $pdo->prepare($sql);
    $smpt->bindValue(':id',$shopId);
    $smpt->execute();
    header('location:dbfunctions.php');
    
}catch(PDOException $e){
    echo 'nie udalo sie. '.$e -> getMessage().' in '.$e->getFile().' on '.$e->getLine();
}
?>
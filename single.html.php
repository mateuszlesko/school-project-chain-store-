<!DOCTYPE html>
<html lang="en">
<head>
  <title>Noname</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  
  <img src='https://ocs-pl.oktawave.com/v1/AUTH_2887234e-384a-4873-8bc5-405211db13a2/spidersweb/2018/01/Apple-Park1.jpg' width='450px' height='360px'>
</div>

<div class="container">
<?php foreach($details as $d):?>
  <div class="row">
    <div class="col-sm-4">
      <h3><?php echo $d['Nazwa sklepu']?></h3>
      <p>Najlepsze usługi informatyczne w twoim miescie</p>
      <p>Gwarantowana wysoka jakosc</p>
      
    </div>
    <div class="col-sm-4">
      <h3>Adres</h3>
      <p><?php echo $d['Wojewodztwo']?>,<?php echo $d['Miasto']?> <?php echo $d['Ulica']?></p>
      <input type='hidden' value="<?php $d['Miasto'];?>" name='A'>
    </div>
    <div class="col-sm-4">
      <h3>Kontakt</h3>        
      <p>Nr tel:<?php echo $d['Kontakt']?></p>
      
    </div>
    <?php endforeach?>
   <?php echo $_GET['ShopID'];?>
  </div>

</div>
<?php include 'footer.html.php';?>
</body>
</html>
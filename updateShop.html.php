<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../Eureka/styles/questions.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form action='updateShop.php' method='POST'>
    <input type='hidden' name='ID' value = "<?php echo $_GET['ShopID'];?>">
            <div class='form-group'>
        <label>Miasto</label><br>
        <input type='text' class="form-control"name='M'required="true" value="<?php echo $_GET['ShopTown']?>"><br>
        </div>
        <div class='form-group'>
        <label>Ulica</label><br>
        <input type='text' class="form-control"name='U'required="true" value="<?php echo $_GET['ShopStreet']?>"><br>
        </div>
        <input type='submit' name='S' class="btn btn-primary" value='Wyslij'><br>
        

    
    
</form>
</div>
</body>
</html>
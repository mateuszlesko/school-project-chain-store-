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
    <div class="form-group">
        <label>Wojewodztwo</label><br>
         <select class = 'form-control' name='W' required="true">
         <option value='Pomorskie'>Pomorkie</option>
         <option value='Kujawsko Pomorskie'>Kujawsko Pomorkie</option>
         <option value='Mazowieckie'>Mazowieckie</option>
         <option value='Malopolskie'>Malopolsie</option>
         <option value='Podkarpackie'>Podkarpackie</option>
         <option value='Lubelskie'>Lubelskie</option>
         <option value='Podlaskie'>Podlaskie</option>
         <option value='Warmijsko-Mazurskie'>Warmijsko-Mazowieckie</option>
         <option value='Zachodnio-Pomorskie'>Zachodnio-Pomorskie</option>
         <option value='Lubuskie'>Lubuskie</option>
         <option value='Dolnoslaskie'>Dolnoslaskie</option>
         <option value='Wielkopolskie'>Wielkopolskie</option>
         <option value='Lodzkie'>Lodzkie</option>
         <option value='Swietokrzyskie'>Swietokrzyskie</option>
         <option value='Slaskie'>Slaskie</option>
         <option value='Opolskie'>Opolskie</option>
         <option value='Dolnoslaskie'>Dolnoslaskie</option>
         </select>
            </div>
            <div class='form-group'>
        <label>Miasto</label><br>
        <input type='text' class="form-control"name='M'required="true"><br>
        </div>
        <div class='form-group'>
        <label>Ulica</label><br>
        
        <input type='text' class="form-control"name='U'required="true"><br>
        </div>
        <div class='form-group'>
        <label>Kontakt</label><br>
        <input type='text' class="form-control"name='K'required="true"><br>
        </div>
        <input type='submit' name='S' class="btn btn-primary" value='Wyslij'><br>
        

    
    
</form>
</div>
</body>
</html>
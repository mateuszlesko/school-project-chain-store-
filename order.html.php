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
    <form action='order.php' method="POST">
            <div class="form-group">
        <label>Wybierz usługe</label><br>
         <select class="form-control" name='W'required="true">
        <option value='1'>Zlozenie komputera</option>
        <option value='2'>Stworzenie lokalnej sieci komputerowej</option>
        <option value='3'>Hosting</option>
        <option value='4'>Stworzenie bazy danych</option>
        </select>
            </div>
            <div class='form-group'>
        <label>Imie</label><br>
        <input type='text' class="form-control" name='M'required="true"><br>
        </div>
        <div class='form-group'>
        <label>Nazwisko</label><br>
        <input type='text'class="form-control" name='N'required="true"><br>
        </div>
        <div class='form-group'>
        <label>Adres email</label><br>
        <input type='email' class="form-control" name='E'required="true"><br>
        </div>
        <div class='form-group'>
        
        </div>
        <input type='submit' name='S' class="btn btn-primary" value='Stworz'><br>
        <?php include 'footer.html.php'?>
    </form>
    </div>
    
</body>
</html>
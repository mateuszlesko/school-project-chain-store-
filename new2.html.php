<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container-fluid">
    
    <div class="container">
    <div class="jumbotron text-center">
    <?php include 'total.php';?>
    <h2>Posiadamy <?php echo total($pdo); ?> sklepy w  całej Polsce </h2>
  
    </div>
   
    
    <main>
        
        <br>
        <form action = 'search.php' method = 'POST'>
        <input type='text' name='input'placeholder='miasto lub ulica'>
        <input type='submit' class="btn btn-dark" value='Go'>
        </form>
    
   Miasta:
   
    <?php echo $output;?>

 </main>


</div>


<!-- Copyright -->
<?php include 'footer.html.php';?>
</body>
</html>
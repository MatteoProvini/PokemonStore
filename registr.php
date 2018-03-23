<html lang="en">
  <head>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <ul class="topnav">
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="catalogo.php">Catalogo</a></li>
      <li><a href="#contact">Cerca Pokemon</a></li>
      <li class="right"><a href="registr.html">Sign Up</a></li>
      <li class="right"><a href="login.html">Login</a></li>
    </ul>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
      Welcome <?php echo $_POST["Name"];?>  <?php echo $_POST["Surname"]; ?><br>
      Your Email address is: <?php echo $_POST["Email"];

      require_once 'DBhelper.php';
      $db_handle = new DBController();
      $db_handle->registrati();
      ?>
  </body>
</html>

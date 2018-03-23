<html lang="en">
   <!--<head>
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
      <li class="right"><a href="registr.html">Logout</a></li>
      <form action="CercaPokemon.php" method="post">
        <input type="text" placeholder="Search.." name="search">
      </form>
    </ul>
    -->
    <body>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Ben fatto!</h4>
        Benvenuto <?php echo $_POST["Name"];?><br>
      <?php
      require_once 'DBhelper.php';
      $db_handle = new DBController();
      $db_handle->login();
      ?>
</body>
</html>

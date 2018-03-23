<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="catalogo.php">Catalogo</a></li>
  <li class="right"><a href="registr.html">Sign Up</a></li>
  <li class="right"><a href="login.html">Login</a></li>
  <form action="CercaPokemon.php" method="post">
    <input type="text" placeholder="Search.." name="search">
  </form>
</ul>
    <div style="padding:0 16px;">
    </div>
    <?php
    $cerca=$_POST['search'];

    require_once 'DBhelper.php';
    $db_handle = new DBController();
    $db_handle->FindPokemon($cerca);
    ?>
</body>
</html>

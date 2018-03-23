<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body >

  <ul class="topnav">
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="catalogo.php">Catalogo</a></li>
    <li class="right"><a href="registr.html">Sign Up</a></li>
    <li class="right"><a href="login.html">Login</a></li>
    <form action="CercaPokemon.php" method="post">
      <input type="text" placeholder="Search.." name="search">
    </form>
  </ul>
<?php
      $x_pag = 10;  //[1] how many rows to display for each page

      if (isset($_GET['pag'])) //[2]
      {
          $pag = $_GET['pag'];
      }
      else
      {
         $pag  = 1;
      }

      //You could do the same at th point [2] with
      //$pag = isset($_GET['pag']) ? $_GET['pag'] : 1;

      if (!$pag || !is_numeric($pag))  //[3]
      {
          $pag = 1;
      }
      require_once 'DBhelper.php';
      $db_handle = new DBController();
      $sql = "SELECT count(*) FROM pokemon"; // [4]
      $sth = $db_handle->query($sql);

      $all_rows = $sth->fetchColumn();  //[5]
      $all_pages = ceil($all_rows / $x_pag); //[6]
      $first = ($pag-1) * $x_pag;  //[7]

      $sql = "SELECT * FROM pokemon LIMIT $first, $x_pag"; //[8]
      $sth = $db_handle->query($sql);

      echo "<table class='tuopadre'><tr><th>Name</th><th>Height</th><th>Weight</th><th>Photo</th></tr>";
      while($result = $sth->fetch(PDO::FETCH_ASSOC))
      {
        echo "<tr><td>" .$result['identifier']. "</td><td>" . $result['height']
            ."</td><td>" .$result['weight'] . "</td>";
        echo"<td><img src='sprites/" . $result['id'] . ".png'></td></tr>";

      }
      echo "</table>";


      if ($all_pages > 1){ //[9]
          if ($pag > 1){  //[10]
              //[11]:$_SERVER['PHP_SELF'] returns the courrent page address
              //eg: http://localhost/PHP_TESTS/pkStore/catalog.php
              //if we add the string ?pag=x, the value x is stored in $_GET['pag']
              echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag - 1) . "\">";
              echo "Pagina Indietro</a>&nbsp;";
          }

          if ($all_pages > $pag){  //[12]
              echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag + 1) . "\">";
              echo "Pagina Avanti</a>";
          }
          echo "<br>";
          for ($p=1; $p<=$all_pages; $p++) { //[13]
              echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . $p . "\">";
              echo $p . "</a>&nbsp;";
          }
      }
  ?>
</body>
</html>

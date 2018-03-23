<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  </head>
    <h1> Pokemon Store</h1>
  <body>
    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 'on');
      $servername = 'localhost';
      $port = 3306;
      $username = 'root';
      $password = 'mysql';
      $dbName= 'POKEMON';
      try
      {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        echo "<br>";

      $sql = "SELECT * FROM pokemon";
      $sth = $conn->prepare($sql);
      $sth->execute();

      $result = $sth->fetch(PDO::FETCH_ASSOC);
      echo'  <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Pokedex</th>
            <th scope="col">Weight</th>
          </tr>
        </thead>';
      while($result = $sth->fetch(PDO::FETCH_ASSOC))
      {
        echo "<tr>";
        echo "<td>" . $result['id'] . "</td>";
        echo "<td>" . $result['identifier'] . "</td>";
        echo "<td>" . $result['species_id'] . "</td>";
        echo "<td>" . $result['weight'] . "</td>";
        echo "</tr>";
      }
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
    ?>
  </body>
</html>

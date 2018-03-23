<?php
class DBcontroller{
  private $conn;
  public function  __construct()
  {
    $this->conn=$this->Connection();
  }

  public function Connection()
  {

        $servername='localhost';
        $port=3306;
        $username='root';
        $password='mysql';
        $dbName='pokemon';

        try{
          $conne = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
          $conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conne;
        }
        catch(PDOException $e) {
          echo "<br />";
          echo "Connection failed: " . $e->getMessage();
        }
  }

  public function query($sql)
  {
    $sth = $this->conn->prepare($sql);
    $sth->execute();
    return $sth;
  }
  public function registrati()
  {
    $name = $_POST["Name"];
    $cognome= $_POST["Surname"];
    $email = $_POST["Email"];
    $pass =$_POST["Password"];

    try{
      $sql="insert into Clienti (Cognome,Email,Password,Nome) values ('$cognome','$email','$password','$name')";
      $sth=$this->conn->prepare($sql);
      $sth->execute();
      echo '<p class="mb-0">Registrazione avvenuta correttamente!</p>';
    }
    catch(PDOException $e) {
      echo "<br />";
      echo "Connection failed: " . $e->getMessage();
    }
  }
  public function login()
  {
    $name = $_POST["Name"];
    $pass =$_POST["Password"];


              $stmt = $this->conn->prepare("SELECT * FROM Clienti WHERE Nome=:name AND Password=:pass ");
              $stmt->execute(array(':name'=>$name, ':pass'=>$pass));
              if($stmt->rowCount()==1)
              {
                include ("Catalogo.php");
                echo '<p class="mb-0">Login avvenuto correttamente!</p>';
              }

              else{
               echo "Login fallito ";
           }
       }
    public function findPokemon($nomeP){
      $stmt=$this->conn->prepare("SELECT * FROM pokemon WHERE identifier LIKE '%$nomeP%' ");
      $stmt->execute();
      echo "<table class='tuopadre'><tr><th>Name</th><th>Height</th><th>Weight</th><th>Photo</th></tr>";
      while($result = $stmt->fetch(PDO::FETCH_ASSOC))
      {
        echo "<tr><td>" .$result['identifier']. "</td><td>" . $result['height']
            ."</td><td>" .$result['weight'] . "</td>";
        echo"<td><img src='sprites/" . $result['id'] . ".png'></td></tr>";

      }
      echo "</table>";
    }


  }

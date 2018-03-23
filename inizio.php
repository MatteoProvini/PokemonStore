<html>
  <body>
    <?php
      echo "Hello World";
      echo "<br>";
      //all uppercase letters
      print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";
      echo "<br>";
      //all lowercase letters
      print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
      echo "<br>";
      // make a string's first character uppercase
      print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
      echo "<br>";
      // make a string's first character of all the words uppercase
      print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";
      echo "<br>";
      echo "<br>";
      $str = "082307";
      $sr = chunk_split($str,2,":");
      echo substr($sr,0,8);
      echo "<br>";
      $a= "The quick brown fox jumps over the lazy dog";
      if (strpos($a, 'jumps') !== false)
      {
        echo 'True';
      }
      else
      {
        echo "False";
      }
      echo "<br>";
      $x =  20;
      $str1 = (string)$x;
      if ($x === $str1)
      {
        echo "They are the same"."\n";
      }
      else
      {
        echo "They are not same"."\n";
           
      }
      echo "<br>";
      $path = 'www.example.com/public_html/index.php';
      $file_name = substr(strrchr($path, "/"), 1);
      echo $file_name."\n";
      echo"<br>";
      $mailid  = 'provini.matteo@itisriva.gov.it';
      $user = strstr($mailid, '@', true);
      echo $user."\n";
      echo "<br>";
      $str1 = 'provini.matteo@itisriva.gov.it';
      echo substr($str1, -3)."\n";
      echo "<br>";
      $value1 = 65.45;
      $value2 = 104.35;
      echo sprintf("%1.2f", $value1+$value2)."\n";
      echo "<br>";
      function password_generate($chars)
      {
      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
      return substr(str_shuffle($data), 0, $chars);
      }
      echo password_generate(7)."\n";
      echo "<br>";
      $str = 'the quick brown fox jumps over the lazy dog.';
      echo preg_replace('/the/', 'That', $str, 1)."\n";
    ?>
  </body>
</html>

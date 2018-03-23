<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  </head>

  <body>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
        Welcome <?php echo $_POST["Name"]; ?><br>
        Your Email address is: <?php echo $_POST["Email"]; ?>
  </body>
</html>

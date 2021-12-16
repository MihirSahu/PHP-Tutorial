<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php site</title>
  </head>

  <body>
    <form action="site.php" method="get">
      Name: <input type="text" name="username">
      Age: <input type="number" name="age">
      <input type="submit">
    </form>
    Your username is: <?php echo $_GET["username"];?>
    <br>
    Your age is: <?php echo $_GET["age"];?>
  </body>
</html>

<!DOCTYPE html>

<html lang="en">

      <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>calculator</title>
      </head>

      <body>
            <form action="calculator.php" method="get">
                  <input type="number" name="num1">
                  <br>
                  <input type="number" name="num2">
                  <br>
                  <input type="submit">
                  <br>
                  Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
            </form>
      </body>

</html>

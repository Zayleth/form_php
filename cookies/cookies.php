<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>

  <style>
      body {
        background: <?php echo $_COOKIE['color']; ?>;
      }
  </style>

</head>
  <body>
  <form action="cookie_creation.php" method="post">
    <input type="color" name="color">
    <button type="submit">Background color preference</button>
  </form>
</body>
</html>
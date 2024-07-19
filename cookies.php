<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
  <body bgcolor="<?php echo @$_COOKIE['color']; ?>">
  
  <form action="cookie_creation.php" method="post">
    <input type="color" name="color">
    <button type="submit">Background color preference</button>
  </form>

</body>
</html>
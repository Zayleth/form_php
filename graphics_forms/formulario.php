<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>

  <form name="voto" action="resultados.php" method="post">
    <label for="voto">Favorite Movie?</label>
    <br>
    <input type="radio" name="voto" value="op1" required>Fast and Furious<br>
    <input type="radio" name="voto" value="op2" required>Narnia<br>
    <input type="radio" name="voto" value="op3" required>Harry Potter<br>
    
    <br>

    <button>SEND</button>

  </form>

  
  
</body>
</html>

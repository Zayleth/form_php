<?php
// vamos a crear un formulario que al darle al boton enviar, se mande automaticamente a nuestro correo.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail Form</title>
</head>
<body>
  <form method="post" action="email_2.php">
    
    <div>
      <label for="nombre">Nombre y Apellido:</label>
        <input type="text" name="nombre">
    </div>
    
    <br>

    <div>
      <label for="mail">Mail:</label>
        <input type="email" name="mail">
    </div>

    <br>

    <div>
    <label for="comentarios">Suggestions?</label>
    <br>
      <textarea name="comentarios" id="" cols="20" rows="5" placeholder="Enter your comment here...">
      </textarea>
    </div>

    <button type="submit">SEND</button>

  </form>
</body>
</html>
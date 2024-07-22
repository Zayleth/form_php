<?php
extract($_POST); // para no esta poniendo la variable $
$text = "Le escribe: $nombre
        Mi correo: $mail
        Mensaje: $comentarios";

// FUNCION PARA MANDAR CORREOS -> mail (¡cuidado con la seguridad!)
// recibe cuatro parametros
// 1. a donde queremos que llegue el correo
// 2. titulo del correo
// 3. cuerpo del correo -> asignado a $texto
// 4. quien envia


if (mail("zaylethvegas@gmail.com", "Mensaje desde la web", $text, "from:visitante")) {

  echo "Correo enviado con éxito"; 

} else {
  echo "Fallo al enviar correo";
}

?>
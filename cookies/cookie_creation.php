<?php
extract($_POST);
// creamos la cookie con la funcion setcookie("", "$", time();
// recibe parametros (nombre de la cookie, valor que se va a guardar, cuanto tiempo durara esa cookie)

setcookie("color", "$color", time()+3600);

// hacemos header para regresarnos a la cookies.php
header("location:cookies.php")

// cookie individual por navegador
?>
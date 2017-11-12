<?php
//integer, double, string y boolean
$int = 20;
$doub = 20.20;
$string = "Cadena de caracteres!";
$bool = true;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Tipus de dades</title>
  </head>
  <body>
    <h1>Exercici 3 - Tipus de dades</h1>
    <p><?= "Esto es un integer: ".$int; ?></p>
    <p><?= "Esto es un double: ".$doub; ?></p>
    <p><?= "Esto es un string: ".$string; ?></p>
    <p><?= "Esto es un boolean: ".$bool; ?></p>
  </body>
</html>

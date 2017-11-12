<?php
  $resul = 0;
  $cadena ="Taula del 10<br>";
  for ($i=0; $i <= 10; $i++) {
    $resul=$i*10;
    $cadena=$cadena."10x".$i."=".$resul."<br>";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Random2</title>
  </head>
  <body>
    <h1>Exercici 6 - Taula 10</h1>
    <h3><?= $cadena; ?></h3>
  </body>
</html>

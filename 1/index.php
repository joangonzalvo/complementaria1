<?php
  $dia = date ( "d");

  if($dia<=10){
    $salida = "DISPONIBLE";
  }
  else{
    $salida = "NO DISPONIBLE";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title><?= $salida; ?></title>
  </head>
  <body>
    <h1>Exercici 1</h1>
    <p><?= "Hoy es ".$dia; ?></p>
    <p>Estado: <?= $salida; ?></p>
  </body>
</html>

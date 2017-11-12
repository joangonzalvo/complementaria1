<?php
  $num = rand (1,100);

  if($num <= 50){
    $comp = "Es menor o igual a 50";
  }
  else {
    $comp = "Es major a 50";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Random</title>
  </head>
  <body>
    <h1>Exercici 2 - Num aleatori</h1>
    <p><?= $num; ?></p>
    <p><?= $comp; ?></p>
  </body>
</html>

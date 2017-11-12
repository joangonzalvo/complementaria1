<?php
  $num = rand (1,3);

  if($num >= 2){
    if($num == 3){
      $text = "Tres";
    }
    else{
      $text = "Dos";
    }
  }
  else{
    $text = "Un";
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
    <h1>Exercici 2 - Num aleatori</h1>
    <h3><?= $text; ?></h3>
  </body>
</html>

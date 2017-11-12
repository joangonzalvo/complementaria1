<?php
  $resul = 0;
  $flag = 0;
  $color = "green";
  $cadena ="<table><tr><th>Taula del 10</th></tr>";
  for ($i=0; $i <= 10; $i++) {
    if($flag == 0){
      $flag = 1;
      $color = "green";
    }
    else{
      $flag = 0;
      $color = "red";
    }

    $resul=$i*10;
    $cadena=$cadena."<tr><th style='background-color:".$color."'>10x".$i."=".$resul."</th></tr>";
  }
  $cadena=$cadena."</table>";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Random2</title>
  </head>
  <body>
    <h1>Exercici 7 - Taula 10 amb table</h1>
    <h3><?= $cadena; ?></h3>
  </body>
</html>

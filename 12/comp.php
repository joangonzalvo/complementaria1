<?php
    session_start();

    //echo $_SESSION['user']['nom']." ".$_SESSION['user']['edat'];
    // FUNCIONA; SIMPLEMENTE HACER EL CALCULO CON EDAD E IMPRIMIRLO POR PANTALLA
    $nom=$_SESSION['user']['nom'];
    $edad=$_SESSION['user']['edat'];
    if($edad>=18){
      $result = "<p>".$nom.", de ".$edad." anys, es major d'edat.</p>";
    }else{
      $result = "<p>".$nom.", de ".$edad." anys, es menor d'edat.</p>";
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Edat</title>
  </head>
  <body>
    <h1>Exercici 12 - Edat (Comprobar)</h1>
    <p><?= $result ?></p>

  </body>
</html>

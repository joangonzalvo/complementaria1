<?php
  //obtenir el value si está definit:
  $option = isset($_POST['salari']) ? $_POST['salari'] : false;
   if ($option) {
     //si opcio es sal3 (3000):
      if($option=='sal3'){
        echo '<h3>Has de pagar impostos!</h3>';
      }
      //si es un altre opcio:
      else{
        echo '<h3>No has de pagar impostos.</h3>';
      }
   }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Salari</title>
  </head>
  <body>
    <h1>Exercici 13 - Salari</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Nom: <input type="text" name="nom"></p>
      <p>Salari: </p>
      <select name="salari">
        <option value="sal1">1-1000</option>
        <option value="sal2">1001-3000</option>
        <option value="sal3">+3000</option>
      </select>
      <input type="submit" name="" value="Enviar">
    </form>

  </body>
</html>

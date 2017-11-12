<?php
$var1 = 50;
$var2 = 8840;
$var3 = 932111111;

$cadena = "El producte val $var1 €. S'ha d'entregar a la direccio X del codi postal 0$var2. El telefon de contacte es el $var3."
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Strings</title>
  </head>
  <body>
    <h1>Exercici 4 - Strings</h1>
    <p><?= $cadena; ?></p>
  </body>
</html>

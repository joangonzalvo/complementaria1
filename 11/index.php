<?php
    session_start();
    if(isset($_POST)&&
    !empty($_POST['nom'])&&
    !empty($_POST['cognoms'])&&
    !empty($_POST['comentaris']))
    {
            $file=fopen('lib/dades.txt','w');
            fwrite($file,'Usuario -> '.$_POST['nom'].' '.$_POST['cognoms'].' '.$_POST['comentaris']);
            fclose($file);
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Aplicacio</title>
  </head>
  <body>
    <h1>Exercici 11 - Aplicació</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Nom: <input type="text" name="nom"></p>
      <p>Cognoms: <input type="text" name="cognoms"></p>
      <p>Comentaris: <input type="text" name="comentaris"></p>
      <input type="submit" name="" value="Enviar">
    </form>

  </body>
</html>

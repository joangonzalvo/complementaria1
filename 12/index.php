<?php
    session_start();
    if(isset($_POST)&&
    !empty($_POST['nom'])&&
    !empty($_POST['edat']))
    {
        $_SESSION['user']['nom']=htmlspecialchars($_POST['nom']);
        $_SESSION['user']['edat']=htmlspecialchars($_POST['edat']);
        //echo $_SESSION['user']['nom']." ".$_SESSION['user']['edat'];
        header('Location: comp.php');
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
    <h1>Exercici 12 - Edat</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Nom: <input type="text" name="nom"></p>
      <p>Edat: <input type="number" name="edat"></p>
      <input type="submit" name="" value="Enviar">
    </form>

  </body>
</html>

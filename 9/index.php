<?php


function imagenes() {
  $dir = "fotos/";

  // Abre un directorio conocido, y procede a leer el contenido
  if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        echo "<table><tr>";
          while (($file = readdir($dh)) !== false) {
              if(strlen($file)>=4){
              echo "<td>";
              echo "<img src=".$dir."/".$file.">";
              echo "</td>";
            }
          }
        echo "</tr></table>";

          closedir($dh);
      }
      else{
        echo "No s'ha trobat imatges";
        closedir($dh);
      }
  }
  else{
    echo "No s'ha trobat directori";
  }

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Fotos</title>
  </head>
  <body>
    <h1>Exercici 9</h1>
    <p><?= imagenes();?></p>
  </body>
</html>

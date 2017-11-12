<?php
function tipoimg($file){
  //flag false, si no encuentra el archivo deseado seguira en falso
  //al comprobar si la funcion retorna false no implementara la imagenes

  $flag=false;
  //$comprobar = recoge la extension del archivo (todo lo que aparece...
  //..despues del '.'

  $comprobar = substr(strrchr($file, "."), 1);
  if($comprobar=='jpg'){
    $flag=true;
  }
  if($comprobar=='png'){
    $flag=true;
  }
  if($comprobar=='bmp'){
    $flag=true;
  }
  if($comprobar=='gif'){
    $flag=true;
  }
  return $flag;

}

function imagenes() {
  $dir = "fotos/";

  // Abre un directorio conocido, y procede a leer el contenido
  if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        echo "<table><tr>";
          while (($file = readdir($dh)) !== false) {
              if(strlen($file)>=4 && tipoimg($file)==true){
              echo "<td>";
              echo "<img src=".$dir."/".$file." height='100' width='100'>";
              /*Para comprobar que funciona:*/
              //$comprobar = substr(strrchr($file, "."), 1);
              //echo $comprobar."<-";
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
    <title>Fotos2</title>
  </head>
  <body>
    <h1>Exercici 10</h1>
    <p><?= imagenes();?></p>
  </body>
</html>

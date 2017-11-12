<?php
$array = array();

for ($i=0; $i <= 99; $i++) {
  $array[$i]=rand (1,100);
}//generacion de numeros para el array
$array[99]=75;//aseguro un numero que sera siempre el mismo para comprobar el ejercicio

  //var_dump($array);
  //die;

  function comprobar($num, $array){
    $encontrado="Trobat en: ";
    $flag=0;
    for ($i=0; $i <= 99; $i++) {
      if($array[$i]==$num){
        $flag=1;
        $encontrado=$encontrado."Posicio => ".$i." ";
        //Para comprobar en que posiciones se ha encontrado el valor
      }

    }
    if($flag==0){
      echo "No s'ha trobat";
    }
    else{
      echo "S'ha trobat!".$encontrado.".";
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Funcions</title>
  </head>
  <body>
    <h1>Exercici 8 - Funcio</h1>
    <p><?= comprobar(22,$array);?></p>

  </body>
</html>

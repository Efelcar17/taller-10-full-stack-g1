<?php
  $numberArray = array();
  $sum = 0;

  for ($i = 0; $i < 5; $i++) {
   echo "Ingrese un número a sumar \n";
    $numberArray[] = readline();
}

  foreach($numberArray as $num) {
    $sum =$sum + $num;
  }

echo "La suma de los números del arreglo es: $sum ";

?>

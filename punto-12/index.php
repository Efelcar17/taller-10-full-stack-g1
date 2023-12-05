<?php
$number = 0;

echo "Ingrese el número a multiplicar \n";
$number = readline();

for ($i = 0; $i <= 30; $i++) {
  echo $number . " x " . $i. " = " .($number * $i)."\n";
}
?>

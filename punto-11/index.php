<?php
$sum = 0;

for($i = 1; $i <= 100; $i = $i +2) {
echo $i . "\n";
$sum += $i;
}

echo "El resultado de sumar los impares entre 0 y 100 es: " . $sum;
?>
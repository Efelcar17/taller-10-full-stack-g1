<?php
//DATOS DE ENTRADA
$name = "";
$age = 0;

//PROCESO
echo "Ingrese su nombre \n";
$name = readline();

echo "Ingrese su edad \n";
$age = readline();

if ($age >= 18) {
echo "Hola " . $name . " usted es mayor de edad ";
} else{
  echo "Hola " . $name . " usted es menor de edad ";
}
?>
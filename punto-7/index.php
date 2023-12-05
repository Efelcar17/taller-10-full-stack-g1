<?php
$numberOne = 0;
$numberTwo = 0;
$option = "";
$result = 0;
//PROCESO
echo "Ingrese el primer número \n";
$numberOne = readline();
echo "Ingrese el segundo número \n";
$numberTwo = readline();

echo "Seleccione la operación a realizar \n";
echo "+ -> Suma \n";
echo "- -> Resta \n";
echo "* -> Multiplicación \n";
echo "/ -> División \n";
$option = readline();

switch($option){
  case "+":
    $result = $numberOne + $numberTwo;
    break;
  case "-":
    $result = $numberOne - $numberTwo;
    break;
  case "*":
    $result = $numberOne * $numberTwo;
    break;
  case "/":
    $result = $numberOne / $numberTwo;
    break;
  default:
    echo "Opción inválida \n";
    break;
}
echo "El resultado es: ".$result;
?>
<?php
  include "./operationUtils.php";
//DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = "";

//1. LLAMAR UNA FUNCIÓN PARA PEDIR LOS NÚMEROS
$numberOne = getNumber();
$numberTwo = getNumber();

//2. LLAMAR UNA FUNCIÓN PARA MOSTRAR EL MENÚ Y OBTENER LA OPCIÓN DE USUARIO
$option = showMenu();

//3. LLAMAR UNA FUNCIÓN QUE SELECCIONE LA OPERACIÓN CORRECTA
$result = operate($numberOne, $numberTwo, $option);

//4. MOSTRAR EL RESULTADO
echo "Resultado: ".$result;
?>
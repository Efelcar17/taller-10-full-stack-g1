<?php
  //1. FUNCIÓN PARA PODER OBTENER UN NÚMERO
function getNumber(){
  echo "Ingrese un número a operar \n";
  return readline();// number
}

//2. Función para mostrar menu y retomar respuesta
function showMenu(){
  echo "Seleccione una opción: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";
  return readline();// string
}

//3. Función para obtener operación correcta
function operate($x, $y, $option){
  switch($option){
    case 1:
      return add($x, $y);
    case 2:
      return sub($x, $y);
    case 3:
      return dot($x, $y);
    case 4:
      return split($x, $y);
    default:
      echo "Opción incorrecta";
      return 0;
  }
}

//4. Funcion por cada operacion
function add($x, $y){
  return $x + $y;// number
}

    function sub($x, $y){
    return $x - $y;// number
    }

    function dot($x, $y){
      return $x * $y; // number
    }

  function split($x, $y){
    return $x / $y; // number
  }
?>
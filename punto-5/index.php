<?php
//DATOS DE ENTRADA
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

//PROCESO
echo "Indique su tipo de membresía: ";
$membershipType = strtoupper(readline());

echo "Indique el número de personar a ingresar: ";
$personNumber = readline();

$totalPrice = $personNumber * TICKET_PRICE;    

if ($membershipType == 'A' || $membershipType == 'B') {$discount = $totalPrice * 0.3;
$totalPrice = $totalPrice - $discount;                               
}else{
  echo "Su membresía no tiene descuento \n";
}

echo "El total a pagar es: " . $totalPrice;

?>

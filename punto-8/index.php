<?php
$membershipType = "";
$numberPerson = 0;
const TICKET_PRICE = 25000;

echo "Indique su tipo de membresía \n";
$membershipType = strtoupper(readline());
echo "Indique el número de personas \n";
$numberPerson = readline();

$totalPrice = $numberPerson * TICKET_PRICE;

switch ($membershipType) {
  case "A":
  $totalPrice = $totalPrice * 0.7;
  break;
  case "B":
  $totalPrice = $totalPrice * 0.75;
  break;
  case "C":
  $totalPrice = $totalPrice * 0.9;
  break;
  case "D":
  $totalPrice = $totalPrice * 0.95;
  break;
  default:
  echo "Su membresía no le otorga descuento \n";
}

echo "El total a pagar es: $" . $totalPrice;
?>
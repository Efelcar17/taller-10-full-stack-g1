<?php
include "./passwordCheck.php";

$user = "";
$password ="";

echo "Ingrese usuario a registrar \n";
$user = readline();
  
echo "Ingrese contraseña a registrar \n";
$password = readline();

if(hasSecurityLong($password)){
  if(hasUpperLetter($password)){
    if(hasNumber($password)){
      echo "Contraseña registrada es segura \n";
      }else{
        echo "La contraseña por no contener números no es segura \n";
        }
      }else{
        echo "La contraseña por no tener letra mayúscula no es segura \n";
        }
      }else{
        echo "La contraseña por longitud no es segura \n";
        }
?>
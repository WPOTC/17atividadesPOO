<?php

class Primos{


// Função para verificar se é primo
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
   echo " $num";
    return true;
}



}

?>
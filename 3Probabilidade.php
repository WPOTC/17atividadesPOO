<?php

class Probabilidade{
    public $NumeroLados;
    public $LadosImpares;

    public function Ex3($NumeroLados){
       
       
       
       
        $LadosImpares = $NumeroLados/2;
       echo "A probabilidade de cair um número Ímpar é de $LadosImpares/$NumeroLados";
    }
}

?>
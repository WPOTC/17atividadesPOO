<?php
class Juros{
    public $Retorno;
    public $Investimento;
    public $Juros;
    public $Anos;

    public function CalculoJuros($Investimento,$juros, $Anos){
    $Retorno = $Investimento * pow(1 + $juros/100, $Anos);
    
    echo "O retorno será de: " . number_format($Retorno, 2) ." reais";
}
}
?>
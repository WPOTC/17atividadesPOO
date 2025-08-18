<?php

class Proporcao{
    public $Valor;
    public $Quantidade;
    public $QuantidadeDesejada;
    public $ValorTotal;

    public function Ex8($Valor,$Quantidade, $QuantidadeDesejada){
        $ValorTotal = ($Valor/$Quantidade) * $QuantidadeDesejada;
        echo "O valor de $QuantidadeDesejada unidades é de R$" . $ValorTotal . ",00";
    }
}

?>
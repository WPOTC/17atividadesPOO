<?php
class Sequencia{
    public $UltimoNumero;

    public function Ex2($UltimoNumero){
        $sequencia1 = $UltimoNumero*2;
        $sequencia2= $sequencia1*2;
        $sequencia3= $sequencia2*2;

        echo "Os 3 próximos números dessa sequência serão: " . $sequencia1 .", ". $sequencia2 .", ". $sequencia3;
    }
}
?>
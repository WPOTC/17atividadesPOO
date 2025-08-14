<?php

class Sequencia{

    public $UltimoValor;
    public function Ex10($UltimoValor){
        $Proximo = $UltimoValor+11;
        $Proximo2 = $Proximo+13;
        $Proximo3 = $Proximo2+15;
        echo "Os próximos valores serão: " . $Proximo . ", " . $Proximo2 .", ". $Proximo3;
    }
}

?>
<?php

class Geometria{
    public $ArestaVertical;
    public $ArestaHorizontal;

    public $Perimetro;

    public function Ex9($ArestaHorizontal,$ArestaVertical){
        $Perimetro = ($ArestaVertical*2) + ($ArestaHorizontal*2);
        echo "O perímetro do retângulo é de " . $Perimetro . "m";
}
}
?>
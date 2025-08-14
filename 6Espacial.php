<?php

class Espacial{
    public $aresta;
    public $volumeCubo;

    public function Ex6($aresta){
        $volumeCubo = $aresta * $aresta * $aresta;
        echo "O volume do cubo é: " . $volumeCubo . "cm³";
    }
}

?>
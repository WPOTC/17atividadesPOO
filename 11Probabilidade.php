<?php
class Naipe{
    public $as;
    public $probabilidadeAs;

    public function AsProbabilidade($as){

        if($as == "ás" || $as == "Ás" || $as == "As" || $as == "as"){
            $as = "4";
            $probabilidadeAs = (4/52)*100;
            echo "A probabilidade é de: " . $as . "/52"  . " ou " . $probabilidadeAs . "%";
        }
    }
}
?>
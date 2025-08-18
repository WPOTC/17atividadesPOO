<?php
class Raio{
    public $raio;
    public $area;


    public function CalcularSuperficie($raio,){
        $area= pow($raio, 2)*M_PI;
        echo "A superfície da circunferência é de: " . $area . "cm²";
    }
}
?>
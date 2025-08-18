<?php
class Carro{
    public $KmHora;
    public $KmDesejado;
    public $Tempo;

    public function CalculoKm($KmDesejado, $KmHora){
        $Tempo = $KmDesejado/$KmHora;
        echo "Ele percorrerá " . $KmDesejado . "km " . "em " . $Tempo ." hora(s)";

    }
}
?>
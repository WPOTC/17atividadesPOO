<?php

class Taxa{
    public $km;
    public $hora;
    public $vel_media;

    public function Ex7($km,$hora){
        $vel_media = $km/$hora;
    echo "A velocidade média é de: " . $vel_media . "km/h";
    }

}

?>
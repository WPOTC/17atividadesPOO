<?php
class Multiplos{

    public $numero;
    public $limite;
    public function Ex5($numero, $limite){
            for ($i = 0; $i <= $limite ; $i++){
                if($i%$numero == 0)
                echo $i . "<br>";
                
        }
    }
}
?>
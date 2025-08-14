<?php
class Geometria{
    public $base;
    public $altura;
    public $area;

    public function AreaTri($base,$altura, $area){
        $area = $base*$altura/2;
        echo "O triângulo tem uma área de " . $area . "m"^2;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <H1>Probabilidade: Se você lançar um dado de seis lados, qual é a probabilidade de sair um
número ímpar?
</H1>

<form method="POST">
    <label for="NumeroLados ">Número de Lados</label>
    <input type="number" name="NumeroLados">
    <input type="submit" value="Calcular">
</form>
</body>
</html>

<?php
require_once('3Probabilidade.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Probabilidade = new Probabilidade();
    
    $NumeroLados = $_POST['NumeroLados'];
 if($NumeroLados ==0){
    echo "Preencha o campo";
 }else{
    echo $Probabilidade->Ex3($NumeroLados);
 }

}
?>
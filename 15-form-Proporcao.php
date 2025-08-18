<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex15</title>
</head>
<body>

<h1>Problema de Proporção: Se 4 canetas custam R$12, quanto custarão 10 canetas?</h1>

<form method="POST">
    <label for="Valor">Valor das Canetas (juntas): </label>
    <input type="number" name="Valor"><br>
    <label for="Quantidade">Quantidade de canetas: </label>
    <input type="number" name="Quantidade"><br>
    <label for="QuantDesejada"> Quantidade Desejada: </label>
    <input type="number" name="QuantidadeDesejada">
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php

require_once("8Proporcao.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$Proporcao = new Proporcao();

$Valor=$_POST['Valor'];
$Quantidade=$_POST['Quantidade'];
$QuantidadeDesejada=$_POST['QuantidadeDesejada'];

$Proporcao->Ex8($Valor, $Quantidade, $QuantidadeDesejada);





}

?>
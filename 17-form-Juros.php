<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex17</title>
</head>
<body>

<h1>Problema de Juros: Se você investir R$ 5.000 a uma taxa de juros composta de 8% ao
ano, quanto terá após 5 anos?
</h1>

<form method="POST">
    <label for="Investimento">Investimento: </label>
    <input type="number" name="Investimento"><br>
    <label for="Juros">Juros composto aplicado: </label>
    <input type="number" name="Juros"><br>
    <label for="Tempo">Tempo (anos): </label>
    <input type="number" name="Tempo">
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('17Juros.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Juros = new Juros();

    $Investimento = $_POST['Investimento'];
    $juros=$_POST['Juros'];
    $Anos=$_POST['Tempo'];

    $Juros->CalculoJuros($Investimento, $juros, $Anos);


}

?>
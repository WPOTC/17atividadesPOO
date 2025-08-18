<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex11</title>
</head>
<body>

<h1> Probabilidade: Se você tem um baralho com 52 cartas, qual é a probabilidade de tirar
um ás (carta de naipe) em uma única tentativa?
</h1>

<form method="POST">
    <label for="Probabilidade">Digite a carta (ás):</label>
    <input type="text" name="Carta" required>
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('11Probabilidade.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Naipe = new Naipe();

    $as=$_POST['Carta'];

    $Naipe->AsProbabilidade($as);
}
?>
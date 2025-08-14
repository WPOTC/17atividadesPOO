<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex9</title>
</head>
<body>

<h1>Geometria: Calcule o perímetro de um retângulo com lados de 7 metros e 12 metros.
</h1>

<form method="POST">
    <label for="ArestaVertical">Aresta Vertical (m): </label>
    <input type="number" name="ArestaVertical"><br>
    <label for="ArestaHorizontal">Aresta Horizontal (m): </label>
    <input type="number" name="ArestaHorizontal"><br>
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php

require_once('9Geometria.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$Geometria = new Geometria();

$ArestaVertical = $_POST['ArestaVertical'];
$ArestaHorizontal = $_POST['ArestaHorizontal'];

$Geometria->Ex9($ArestaVertical, $ArestaHorizontal);




}

?>
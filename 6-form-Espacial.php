<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
</head>
<body>

<h1>Geometria Espacial: Calcule o volume de um cubo com aresta de 5 centímetros.</h1>

<form method="POST">
    <label for="Aresta">Aresta do cubo (em cm):</label>
    <input type="number" name="Aresta">
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('6Espacial.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Espacial = new Espacial();

    $aresta=$_POST['Aresta'];

    $Espacial->Ex6($aresta);



}

?>
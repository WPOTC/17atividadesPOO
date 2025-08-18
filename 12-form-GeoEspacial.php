<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex12</title>
</head>
<body>

<h1>Geometria Espacial: Calcule a área da superfície de uma esfera com raio de 6
centímetros.
</h1>

<form method="POST">
    <label for="CalculoRaio">Digite o raio: </label>
    <input type="number" name="Raio" required>
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('12GeoEspacial.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Raio = new Raio();

    $raio=$_POST['Raio'];

    $Raio->CalcularSuperficie($raio );
}

?>
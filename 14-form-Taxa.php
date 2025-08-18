<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex14</title>
</head>
<body>

<h1>Problema de Taxa: Se um carro viaja a uma velocidade constante de 80 km/h, quanto
tempo levará para percorrer 240 quilômetros?
</h1>

<form method="POST">
    <label for="KM">Quantos km você quer que ele percorra: </label>
    <input type="number" name="KmDesejado"><br>
    <label for="KMhr">QuantoS km ele percorre por hora: </label>
    <input type="number" name="KmHora">
    <input type="submit" value="Calulcar">
</form>
    
</body>
</html>

<?php
require_once('14Taxa.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Carro = new Carro();
    
    $KmDesejado=$_POST['KmDesejado'];
    $KmHora=$_POST['KmHora'];

    $Carro->CalculoKm($KmDesejado,$KmHora);
}
?>
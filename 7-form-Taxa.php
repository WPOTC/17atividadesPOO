<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>
<body>
<h1>Problema de Taxa: Se você percorrer 120 quilômetros em 2 horas, qual é a sua
velocidade média?
</h1>
<form method="POST">
    <label for="Km">Quilômetros: </label>
    <input type="number" name="Km"><br>
    <label for="Hora">Hora: </label>
    <input type="number" name="Hora"><br>
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('7Taxa.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Taxa = new Taxa();
    
    $km=$_POST['Km'];
    $hora=$_POST['Hora'];

    $Taxa->Ex7($km, $hora);




}



?>
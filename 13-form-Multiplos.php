<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    
<h1>Problema de Múltiplos: Liste os múltiplos de 7 menores que 50.</h1>

<form method="POST">
    <label for="Numero">Número: </label>
    <input type="number" name="Numero"><br>
    <label for="Limite">Limite: </label>
    <input type="number" name="Limite"><br>
    <input type="submit" value="Calcular">
</form>

</body>
</html>

<?php
require_once('5Multiplos.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $Multiplo = new Multiplos();

    $Numero=$_POST['Numero'];
    $Limite=$_POST['Limite'];

    $Multiplo->Ex5($Numero,$Limite);



}

?>
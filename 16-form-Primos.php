<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex16</title>
</head>
<body>

<h1>Sequência de Primos: Liste os primeiros cinco números primos maiores que 20.</h1>

<form method="POST">
    <label for="Numero">Primeiro número: </label>
    <input type="number" name="Comeco">
    <input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
require_once('16Primos.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $Primos = new Primos();

 $contador = 0;
 $numero =$_POST['Comeco']; 
 $primos = [];

while ($contador < 5) {
    if ($Primos->ehPrimo($numero)) {
        $primos[] = $numero;
        $contador++;
    }
    $numero++;
}
}
?>
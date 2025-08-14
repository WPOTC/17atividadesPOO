<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex10</title>
</head>
<body>
    <h1>Sequência Numérica: Complete a sequência: 1, 4, 9, 16, 25, ...</h1>
    <form method="POST">
        <label for="NumeroSequencia">Digite o ultimo valor da sequência: </label>
        <input type="number" name="UltimoValor">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php

require_once('10Sequencia.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$Sequencia = new Sequencia();

$UltimoValor = $_POST['UltimoValor'];

$Sequencia->Ex10($UltimoValor);



}

?>
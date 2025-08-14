<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <h1>Sequência Numérica: Qual será os 3 próximos números na sequência 2, 4, 8, 16, ...?</h1>
    <form method="POST">
        <label for="UltimoNumero">Informe o ultimo número da sequência</label>
        <input type="number" name="UltimoNumero">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
require_once('2Sequencia.php');

$Sequencia = new Sequencia();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $UltimoNumero=$_POST['UltimoNumero'];
    $Sequencia->Ex2($UltimoNumero);

}

?>
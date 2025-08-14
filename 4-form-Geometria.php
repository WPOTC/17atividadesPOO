<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>

<h1>Geometria: Encontre a área de um triângulo com base 8 metros e altura 6 metros</h1>
<form method="POST">
    <label for="Altura">Altura do triângulo:</label>
    <input type="number" name="Altura" required> <br>
    <label for="Base">Base do triângulo:</label>
    <input type="number" name="Base" required><br>
    <input type="submit" value="Calcular">
</form>


</body>
</html>

<?php
require_once('4Geometria.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$Geometria = new Geometria();

$altura = $_POST['Altura'];
$base = $_POST['Base'];

if($base =="" || $altura == ""){
echo "Preencha tudo";
}else{
    $Geometria->AreaTri($base, $altura);
}
}
?>
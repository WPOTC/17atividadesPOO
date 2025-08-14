<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>

<form method="POST">

   <label for="IdadeMaria">Idade da Maria:</label>
   <input type="number" name="IddMaria">
   <input type="submit" value="Enviar">

</form>

</body>
</html>
<?php
   
?>

<?php
   require_once("1Idades.php");
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $Idades = new Idades();
   

   $maria=$_POST['IddMaria'];
  

   

   if($maria== ""){
     echo "Por favor, digite a idade de Maria";
   }else{
    echo $Idades->Ex1($maria);
   }

}

?>
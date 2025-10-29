<?php 
include_once 'classeCalculadora.php';
$calculo = new calculadora(10, 20);
$calculo->somaNumeros();
$calculo->subtraiNumeros();
$calculo->multiplicaNumeros();
$calculo->divideNumeros();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form>
    <input type="number" name="numero1" placeholder="Digite o 1º número">
    <br><br>
    <input type="number" name="numero2" placeholder="Digite o 2º número">
    <br>
    <input type="submit" value="+" name="">
    <input type="submit" value="-" name="">
    <input type="submit" value="x" name="">
    <input type="submit" value="÷" name="">
    
    </form>
</body>
</html>
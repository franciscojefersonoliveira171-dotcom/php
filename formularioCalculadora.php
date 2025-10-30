<?php
    require_once 'instanciaCalculadora.php'
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Calculadora</h3>
    <form method="POST" action="instanciaCalculadora.php">
        <input type="number" name="numero1" placeholder="Digite o 1º número">
        <br><br>
        <input type="number" name="numero2" placeholder="Digite o 2º número">
        <br>
        <input type="submit" value="+" name="btnSoma">
        <input type="submit" value="-" name="btnSubtracao">
        <input type="submit" value="x" name="btnMultiplicacao">
        <input type="submit" value="÷" name="btnDivisao">

    </form>
</body>

</html>
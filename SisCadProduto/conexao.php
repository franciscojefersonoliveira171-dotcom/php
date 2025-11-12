<?php
    $dsn ="mysql:host=localhost;dbname=turmaj";
    $usuario ="root";
    $senha ="";

    try{
        $conexao = new PDO($dsn,$usuario,$senha);
        echo"conexão com banco de dados realizada com sucesso!!!!";
    }catch(PDOException $erro){
        echo"não foi possivel se conectar com o banco de dados,tente novamente!!!!".$erro ->getMessage();
    }
?>
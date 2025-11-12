<?php
require_once 'ProdutoDTO.php';
require_once 'ProdutoDAO.php';
require_once 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['btnCadastrar']){

            $produtoDTO = new ProdutoDTO();
            $produtoDAO = new ProdutoDAO($conexao);

            $produtoDTO->__setNome($_POST['nome']);
            $produtoDTO->__setQuantidade($_POST['quantidade']);
            $produtoDTO->__setValor($_POST['valor']);
            $produtoDTO->__setDescricao($_POST['descricao']);

            $produtoDAO->cadastrardadosbanco($produtoDTO);

            //echo"<pre>";
            //var_dump($produtoDTO);
        }
    }

?>
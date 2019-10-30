<?php

include 'conexao.php';

/*Variáveis que vão receber os dados do formulário */
$nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categProduto = $_POST['categProduto'];
$qtdProduto = $_POST['qtdProduto'];
$fornecedorProduto = $_POST['fornecedorProduto'];

/*Comando SQL para inserir no BD os dados do formulário.*/
$sql = "INSERT INTO `estoque`(,`nroProduto`, `nomeProduto`, `categProduto`, `fornecedorProduto`, `qtdProduto`) 
        VALUES ($nroProduto,'$nomeProduto','$categProduto','$fornecedorProduto',$qtdProduto)";

$inserir = mysqli_connect($conexao,$sql);

?>
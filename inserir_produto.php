<?php

include 'conexao.php';

/*Variáveis que vão receber os dados do formulário */
$nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categProduto = $_POST['categProduto'];
$qtdProduto = $_POST['qtdProduto'];
$fornecedorProduto = $_POST['fornecedorProduto'];

/*Comando SQL para inserir no BD os dados do formulário.*/
$sql = "INSERT INTO `estoque`(`nroProduto`, `nomeProduto`, `categProduto`, `fornecedorProduto`, `qtdProduto`) 
        VALUES ($nroProduto,'$nomeProduto','$categProduto','$fornecedorProduto',$qtdProduto)";


$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<center>
        <div class="container" style"width: 500px; margin-top: 20px">
                
                <h4>Produto adicionado com sucesso!</h4>
                <div style="padding-top:20px"></div>
                <a href="index.php" role="button" class="btn btn-sm btn-primary" style="color:green" >Cadastrar novo item</a>
                <a href="index.php" id="btnVoltar" class="btn btn-sm btn-primary">Voltar</a>

        </div>
</center>
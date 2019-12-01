<?php

include "conexao.php";

$id = $_POST['id'];
$nomeProduto = $_POST['nomeProduto'];
$categProduto = $_POST['categProduto'];
$qtdProduto = $_POST['qtdProduto'];
$fornecedorProduto = $_POST['fornecedorProduto'];

$sql = "UPDATE `estoque` 
        SET `nomeProduto`='$nomeProduto',`categProduto`='$categProduto',
        `fornecedorProduto`='$fornecedorProduto',`qtdProduto`='$qtdProduto' 
        WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:400px">

    <center>
        <h3>Atualizado com Sucesso!</h3>
        <div style="margin-top:50px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" >Voltar</a>
        </div>
    </center>
</div>
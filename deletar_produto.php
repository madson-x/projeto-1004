<?php

include 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:400px">

    <center>
        <h3>Produto excluído com Sucesso!</h3>
        <div style="margin-top:50px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" >Voltar</a>
        </div>
    </center>
</div>
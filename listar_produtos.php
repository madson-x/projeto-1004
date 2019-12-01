<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<div class="container" style="margin-top:40px">
    <h3>Lista de produtos</h3>
    <br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Num. Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
    
    <?php

    include 'conexao.php';
    $sql = "SELECT * FROM `estoque`";
    $busca = mysqli_query($conexao,$sql);

    while($array = mysqli_fetch_array($busca)) {
        $id_estoque = $array['id_estoque'];
        $nroProduto = $array['nroProduto'];
        $nomeProduto = $array['nomeProduto'];
        $categProduto = $array['categProduto'];
        $fornecedorProduto = $array['fornecedorProduto'];
        $qtdProduto = $array['qtdProduto'];
        ?>
 
    <tr>
      <td><?php echo $nroProduto ?></td>
      <td><?php echo $nomeProduto ?></td>
      <td><?php echo $categProduto ?></td>
      <td><?php echo $fornecedorProduto ?></td>
      <td><?php echo $qtdProduto ?></td> 
      <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a>
          <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button">Ecxluir</a>
    </td> 
    </tr>
    <?php } ?>

</table>
<div style="text-align:right">
    <a href="index.php" id="btnVoltar" class="btn btn-sm btn-primary">Voltar</a>
</div>

</div>

<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>
<?php
include 'conexao.php';
$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cusro PHP - Udemy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">

    #tamanhoContainer{
        width:500px;
    }

    #btnCad{
        background-color: green; /*Cor do  fundo do botão*/
        color: #ffffff; /*Cor da letra*/
        font: bold;
    }
    
    </style>
</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top:40px">
    <h4>EDITAR PRODUTO</h4>
    <form action="atualizar_produto.php" method="post" style="margin-top:40px">
        <?php
        
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id"; 
            $buscar = mysqli_query($conexao,$sql);
            while ($array= mysqli_fetch_array($buscar)) {
                $id_estoque = $array['id_estoque'];
                $nroProduto = $array['nroProduto'];
                $nomeProduto = $array['nomeProduto'];
                $categProduto = $array['categProduto'];
                $fornecedorProduto = $array['fornecedorProduto'];
                $qtdProduto = $array['qtdProduto'];            
            }        
        ?>

      <div class="form-group">
        <label>Número do produto</label>
        <input type="number" class="form-control" name="nroProduto" value="<?php echo $nroProduto ?>" disabled>
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">
      </div>
      <div class="form-group">
        <label>Nome produto</label>
        <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto ?>">
      </div>
      <div class="form-group">
        <label>Quantidade</label>
        <input type="number" class="form-control" name="qtdProduto" value="<?php echo $qtdProduto ?>">
      </div>
      <div class="form-group">
        <label >Categoria</label>
        <select class="form-control" name="categProduto">
            <option>Periféricos</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Celulares</option>
        </select>
      </div>
      <div class="form-group">
        <label >Fornecedor</label>
        <select class="form-control" name="fornecedorProduto">
            <option>Fornecedor A</option>
            <option>Fornecedor B</option>
            <option>Fornecedor C</option>
            <option>Fornecedor D</option>
        </select>
      </div>
      <button type="submit" id="btnUpd" class="btn btn-sm">Atualizar</button>
    </form>

</div>


<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>
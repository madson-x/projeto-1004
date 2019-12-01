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
    <h4>FORMULÁRIO DE CADASTRO</h4>
    <form action="inserir_produto.php" method="post" style="margin-top:40px">
      <div class="form-group">
        <label>Número do produto</label>
        <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto." required autocomplete="off">
      </div>
      <div class="form-group">
        <label>Nome produto</label>
        <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto."required autocomplete="off">
      </div>
      <div class="form-group">
        <label>Quantidade</label>
        <input type="number" class="form-control" name="qtdProduto" placeholder="Insira a quantidade de itens do produto."required autocomplete="off">
      </div>
      <div class="form-group">
        <label >Categoria</label>
        <select class="form-control" name="categProduto" required autocomplete="off">
            <option>Periféricos</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Celulares</option>
        </select>
      </div>
      <div class="form-group">
        <label >Fornecedor</label>
        <select class="form-control" name="fornecedorProduto" required autocomplete="off">
            <option>Fornecedor A</option>
            <option>Fornecedor B</option>
            <option>Fornecedor C</option>
            <option>Fornecedor D</option>
        </select>
      </div>
      <button type="submit" id="btnCad" class="btn btn-sm">Cadastrar</button>
      <a href="index.php" id="btnVoltar" class="btn btn-sm btn-primary">Voltar</a>
    </form>
</div>

<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>
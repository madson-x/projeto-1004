<?php

/*Conexao de acesso ao BD MySQL*/
$servername = "localhost"; //padrão - server local
$database = "curso_estoque"; //alterar conforme o BD a ser conectado
$username = "root"; //Usuario do BD
$password = ""; //Senha de conexão do BD

//Criando a conexao
$conexao = mysqli_connect($servername, $username, $password, $database);
?>
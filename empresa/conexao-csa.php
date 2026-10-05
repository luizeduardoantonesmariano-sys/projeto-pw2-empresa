<?php 
$servidor = "localhost";
$banco = "empresa";
$senha = "";
$usuario = "root";

$sql = "Create database if not EXISTS empresa;";

//conexão sem escolher o banco
$conexao = mysqli_connect($servidor, $usuario, $senha);

//criação automática do banco de dados
$resultado = mysqli_query($conexao, $sql);

//seleciono o banco recém criado
mysqli_select_db($conexao, "empresa");

?>
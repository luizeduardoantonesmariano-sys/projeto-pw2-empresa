<?php 
include "conexao-csa.php";
$sql = "
CREATE TABLE IF NOT EXISTS  `usuarios` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nacimento` date NOT NULL,
  `endereço` varchar(100) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
";

$resultado = mysqli_query($conexao, $sql);
if($resultado == 1)
{
    echo "Banco instalado com sucesso";
    header('location: funciona.php?');
}
else
{
    echo "Houve um erro ao rodar a instalação";
    
}
?>
<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$cpf=			$_POST["cpf"];
$nome=		$_POST["nome"];
$nacimento= 		$_POST["nacimento"];
$endereço=			$_POST["endereço"];
$bairro=			$_POST["bairro"];
$cidade=	$_POST["cidade"];
$uf=			$_POST["uf"];
$celular=			$_POST["celular"];
$email=	$_POST["email"];
$usuario=			$_POST["usuario"];
$senha=		$_POST["senha"];
$con=mysqli_connect("localhost","root","","empresa") or die ("erro!");

$in = "insert into usuarios values ('$cpf',
									'$nome',
									'$nacimento',
									'$endereço',
									'$bairro',
									'$cidade', 
									'$uf', 
                           '$celular',
									'$email', 
									'$usuario', 
									'$senha')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   cpf:		$cpf<BR>
   nome:		$nome<BR>
   nacimento:		$nacimento<BR>
   endereço:			$endereço<BR>
   bairro:			$bairro<BR>
   cidade:		$cidade<BR>
   uf:			$uf<BR>
   celular:			$celular<BR>
   email:        $email<BR>
   usuario:		      $usuario<BR>
   senha: 	      $senha<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>



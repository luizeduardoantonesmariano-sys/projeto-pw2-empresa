<HTML>
<BODY>
<?php
$expressao = $_POST["expressao"];
$bd = mysqli_connect("localhost", "root", "", "empresa") or die ("Erro na conexão!");

if (isset($_POST["op"]))
{
    $op = $_POST["op"];
    
    if ($op == "cpf")
        $consulta = mysqli_query($bd, "select * from usuarios where cpf = '$expressao'");
    if ($op == "nome")
        $consulta = mysqli_query($bd, "select * from usuarios where nome like '%$expressao%'");
    if ($op == "nacimento")
        $consulta = mysqli_query($bd, "select * from usuarios where nacimento >= '$expressao'");
    if ($op == "endereço")
        $consulta = mysqli_query($bd, "select * from usuarios where endereço like '%$expressao%'");    
    if ($op == "bairro")
        $consulta = mysqli_query($bd, "select * from usuarios where bairro like '%$expressao%'");
    if ($op == "cidade")
        $consulta = mysqli_query($bd, "select * from usuarios where cidade like '%$expressao%'");
    if ($op == "uf")
        $consulta = mysqli_query($bd, "select * from usuarios where uf = '$expressao'");
    if ($op == "celular")
        $consulta = mysqli_query($bd, "select * from usuarios where celular = '$expressao'");
    if ($op == "email")
        $consulta = mysqli_query($bd, "select * from usuarios where email = '$expressao'");
    if ($op == "usuario")
        $consulta = mysqli_query($bd, "select * from usuarios where usuario like '%$expressao%'");
    if ($op == "senha")
        $consulta = mysqli_query($bd, "select * from usuarios where senha = '$expressao'"); // CORRIGIDO: Adicionado o '='
} 
else 
{
    echo "Volte à página e escolha o campo que fará a pesquisa.";
    exit;
}

if (!$consulta) {
    die("Erro na consulta: " . mysqli_error($bd));
}

$reg = mysqli_fetch_array($consulta);

if (!$reg) 
{
    echo "Não existem registros para a pesquisa!<br>";
    echo "<br><a href='consultar.html'>Voltar</a><br>";
    exit;
}

while ($reg)
{
 
    $cpf       = $reg["cpf"];
    $nome      = $reg["nome"];
    $nacimento = $reg["nacimento"];
    $endereco  = $reg["endereço"];
    $bairro    = $reg["bairro"];
    $cidade    = $reg["cidade"];
    $uf        = $reg["uf"];
    $celular   = $reg["celular"];
    $email     = $reg["email"];
    $usuario   = $reg["usuario"];
    $senha     = $reg["senha"];
    
    echo "cpf: $cpf<br>
          nome: $nome<br>
          nacimento: $nacimento<br>
          endereço: $endereco<br>
          bairro: $bairro<br>
          cidade: $cidade<br>
          uf: $uf<br>
          celular: $celular<br>
          email: $email<br>
          usuario: $usuario<br>
          senha: $senha<br>";
            
    ?>
    <!-- Descomente as linhas abaixo caso vá usar os botões de ação posteriormente -->
    <!-- <a href="excluir.php?pl=<?php echo $cpf;?>" onclick="return confirm('Excluir o registro?');">Excluir</a> -->
    <!-- <a href="alterar.php?pl=<?php echo $cpf;?>">Alterar</a> -->
    <hr>
    <?php
    
    // Avança para a próxima linha do resultado
    $reg = mysqli_fetch_array($consulta);        
} 

mysqli_close($bd);
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>

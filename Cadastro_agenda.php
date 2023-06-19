<?php
include("conexao.php");
$nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name']))
{
$pasta_destino = 'foto/';
$extensao = strtolower(substr($_FILES['foto']['name'],-4));
$nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
}
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$dt_cadastro = $_POST['dt_cadastro'];

$compara = "SELECT * FROM agenda where email = '$email'";
$result = mysqli_query($con,$compara);
$row = mysqli_num_rows($result);

if($row > 0){
    echo "<h1>usuario já tem cadastro</h1>";
    echo "<a class="btn btn-outline-secondary" href='cadastro_agenda.html'>voltar</a>";
    exit();
}

echo "<h1>Dados do agenda</h1>";
echo "Nome: $nome <br>";
echo "Apelido: $apelido <br>";
echo "Endereço: $endereco <br>";
echo "Bairro: $bairro <br>";
echo "Cidade: $cidade <br>";
echo "Estado: $estado <br>";
echo "Telefone: $telefone <br>";
echo "Celular: $celular <br>";
echo "E-mail: $email <br>";
echo "Data Cadastro: $dt_cadastro <br>";

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto)";
$sql .= "VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$dt_cadastro."','".$nome_foto."')";

$result = mysqli_query($con, $sql);
if($result){
echo "Dados cadastrados com sucesso!";
}
else
{
echo "Erro ao tentar cadastrar!";
}


?>
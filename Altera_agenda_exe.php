<?php
include('conexao.php');
$nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name']))
{
$pasta_destino = 'foto/';
$extensao = strtolower(substr($_FILES['foto']['name'],-4));
$nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
}
$id_agenda = $_POST['id_agenda'];
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


echo "<h1>Alteração de dados</h1>";
echo "<p>Usuario: $nome</p>";
$sql = "update agenda set nome = '$nome', apelido = '$apelido', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', telefone = '$telefone', celular = '$celular', email = '$email', dt_cadastro = '$dt_cadastro', foto = '$nome_foto' where id_agenda = '$id_agenda'";

$result = mysqli_query($con, $sql);
if($result)
echo "Dados alterados com sucesso<br>";
else
echo "Erro ao alterar dados: " . mysqli_error($con) . "!";

?>
<a href="index.php">Voltar</a>
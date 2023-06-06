<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "delete from agenda where id_agenda = '$id_agenda'";
$result = mysqli_query($con, $sql);
if($result){
echo "<script>alert('usuario excluido com  sucesso!');";
echo "location.href='Listar_agenda.php';</script>";
}
else
{
    echo "<script>alert('Erro ao excluir usuario!');";
    echo "location.href='Listar_agenda.php';</script>";
}
?>
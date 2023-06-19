<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result); 
    ?>
    <h1>Consulta de agenda</h1>
    <table align="center" width="1300" class="table">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
            <th scope="col">Apelido</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data cadastro</th>
        </tr>

        <?php
        do{
        if($row)
        {
        echo"<tr>";
        echo"<td>". $row['id_agenda'] ."</td>";
        echo"<td>". $row['nome'] ."</td>";
        if($row['foto'] == "")
        echo "<td></td>";
        else
        echo "<td><img src=". $row['foto']. " width='90' height='100'/></td>";
        echo"<td>". $row['apelido'] ."</td>";
        echo"<td>". $row['endereco'] ."</td>";
        echo"<td>". $row['bairro'] ."</td>";
        echo"<td>". $row['cidade'] ."</td>";
        echo"<td>". $row['estado'] ."</td>";
        echo"<td>". $row['telefone'] ."</td>";
        echo"<td>". $row['celular'] ."</td>";
        echo"<td>". $row['email'] ."</td>";
        echo"<td>". $row['dt_cadastro'] ."</td>";
        echo "<td><a  href='Altera_agenda.php?id_agenda=" .$row['id_agenda']."'>alterar</a></td>";
        echo "<td><a  href='Excluir_agenda.php?id_agenda=" .$row['id_agenda']."'>excluir</a></td>";
        echo"</tr>";
        }
    }
        while($row = mysqli_fetch_array($result))
        ?>
    </table>
    <a class="btn btn-outline-secondary" href="index.php">voltar</a>
</body>
</html>
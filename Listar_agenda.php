<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <table align="center" border="1" width="1300">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data cadastro</th>
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
        echo "<td><a href='Altera_agenda.php?id_agenda=" .$row['id_agenda']."'>alterar</a></td>";
        echo "<td><a href='Excluir_agenda.php?id_agenda=" .$row['id_agenda']."'>excluir</a></td>";
        echo"</tr>";
        }
    }
        while($row = mysqli_fetch_array($result))
        ?>
    </table>
</body>
</html>
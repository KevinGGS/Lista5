<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "SELECT * FROM agenda where id_agenda=$id_agenda";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar agenda</h1>
    
    <form action="Altera_agenda_exe.php" method="post">
    <input name='id_agenda' type="hidden" value="<?php echo $row['id_agenda']?>">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
        value="<?php echo $row['nome']?>">
    </div>
    <div>
        <label for="apelido">Apelido</label>
        <input type="text" name="apelido" id="apelido"
        value="<?php echo $row['apelido']?>">
    </div>
    <div>
        <label for="endereco">endereco</label>
        <input type="text" name="endereco" id="endereco"
        value="<?php echo $row['endereco']?>">
    </div>
    <div>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro"
        value="<?php echo $row['bairro']?>">
    </div>
    <div>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade"
        value="<?php echo $row['cidade']?>">
    </div>
    <div>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado"
        value="<?php echo $row['estado']?>">
    </div>
    <div>
        <label for="telefone">Telefone</label>
        <input type="tel" name="fone" id="fone" placeholder="Formato (18) 9999-8888" pattern="\([0-9]{2}\)[0-9]{4-5}-[0-9]{4}"
        value="<?php echo $row['telefone']?>">
    </div>
    <div>
        <label for="celular">Celular</label>
        <input type="tel" name="celular" id="celular" placeholder="Formato (18) 9999-8888" pattern="\([0-9]{2}\)[0-9]{4-5}-[0-9]{4}"
        value="<?php echo $row['celular']?>">
    </div>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email"
        value="<?php echo $row['email']?>">
    </div>
    <div>
        <label for="dt_cadastro">Data cadastro</label>
        <input type="date" name="data" id="data"
        value="<?php echo $row['dt_cadastro']?>">
    </div>
    <input type="submit" value="Salvar">
    </form>
    <h1></h1>
</body>
</html>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Alterar agenda</h1>
    
    <form action="Altera_agenda_exe.php" method="post" enctype="multipart/form-data">
    <input name='id_agenda' type="hidden" value="<?php echo $row['id_agenda']?>">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nome">Nome</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="nome" id="nome"
        value="<?php echo $row['nome']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="apelido">Apelido</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="apelido" id="apelido"
        value="<?php echo $row['apelido']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="endereco">endereco</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="endereco" id="endereco"
        value="<?php echo $row['endereco']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="bairro">Bairro</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="bairro" id="bairro"
        value="<?php echo $row['bairro']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="cidade">Cidade</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="cidade" id="cidade"
        value="<?php echo $row['cidade']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="estado">Estado</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="estado" id="estado"
        value="<?php echo $row['estado']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="telefone">Telefone</label>
        <div class="col-sm-9">
        <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Formato (18) 9999-8888" pattern="\([0-9]{2}\)[0-9]{4-5}-[0-9]{4}"
        value="<?php echo $row['telefone']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="celular">Celular</label>
        <div class="col-sm-9">
        <input class="form-control" type="tel" name="celular" id="celular" placeholder="Formato (18) 9999-8888" pattern="\([0-9]{2}\)[0-9]{4-5}-[0-9]{4}"
        value="<?php echo $row['celular']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="email">E-mail</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="email" id="email"
        value="<?php echo $row['email']?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="dt_cadastro">Data cadastro</label>
        <div class="col-sm-9">
        <input class="form-control" type="date" name="dt_cadastro" id="dt_cadastro"
        value="<?php echo $row['dt_cadastro']?>">
        </div>
    </div>
    <div>
        <input class="btn btn-outline-secondary" type="file" name="foto" accept="image/*">
    </div>
    <input type="submit" value="Salvar">
    </form>
</body>
</html>
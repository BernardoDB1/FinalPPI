<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <?php
    include_once "bancoDados.php";
    include_once "usuario.php";
    $getUser = listUser();
    session_start();
    $usuarioAtual = $_SESSION['usuarioAtual'];
    ?>
   
    <label>Usuario Atual: <?php echo $usuarioAtual->getNome(); ?></label>
    <br>
    <fieldset class="container">
        <legend>Lista de usuarios</legend>
        <table id="tabela">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
            </tr>
            <?php foreach($getUser as $usuario){ ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><button><a href="usuarioinfos.php?id=<?php echo $usuario['id'] ?>">Editar</a></button></td>
            </tr>
            <?php } ?>
        </table>
        <div>
            <button><a href="logoff.php">Deslogar</a></button>
            <button><a href="registro.php?c=true">Cadastrar</a></button>
        </div>
    </fieldset>
</body>
</html>
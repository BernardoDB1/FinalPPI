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
    $id = $_GET['id'];
    $usuario = getUser($id);
    ?>
    <form method="post" action="useratualiza.php">
        <fieldset class="container">
            <input name="id" type="hidden" value="<?php echo $usuario['id']; ?>" />
            <legend>Info</legend>
            <label>Nome:</label>
            <input name="nome" type="text" value="<?php echo $usuario['nome']; ?>" />
            <label>Email:</label>
            <input name="email" type="email" value="<?php echo $usuario['email']; ?>" />
            <label>Senha:</label>
            <input name="senha" type="password" placeholder="Senha" />
            <br />
            <div>
                <button><a href="home.php?p=">Voltar</a></button>
                <input type="submit" value="Atualizar" />
                <button><a href="userdeleta.php?id=<?php echo $id; ?>">Deletar</a></button>
            </div>
        </fieldset>
    </form>
</body>
</html>
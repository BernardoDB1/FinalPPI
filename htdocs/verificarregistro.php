<?php
    include_once "bancoDados.php";
    include_once "usuario.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($nome==null || $email == null || $senha == null || verificarCadastro($email) != null){
        if($_POST['c'] == 'true'){
            header("Location: registro.php?c=true");
        } else {
            header("Location: registro.php?c=false");
        }
    } else {    
        $usuario = new User();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);

        $usuario->setId(inserirUsuario($usuario->getNome(), $usuario->getEmail(), $usuario->getSenha()));
        header('Location: home.php?p=');
    }
?>
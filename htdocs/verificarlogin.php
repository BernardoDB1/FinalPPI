<?php
    include_once "bancoDados.php";
    include_once "usuario.php";

    $u = login($_POST['email'], $_POST['senha']);
    if($u==null){
        header('Location: index.php');
    } else {
        $usuario = new User();
        $usuario->setNome($u['nome']);
        $usuario->setEmail($u['email']);
        $usuario->setSenha($u['senha']); 
        $usuario->setId($u['id']);
        session_start();
        $_SESSION['usuarioAtual']=$usuario;
        header('Location: home.php?p=');
    }
?>
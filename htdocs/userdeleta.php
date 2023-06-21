<?php
	include_once "bancoDados.php";
	include_once "usuario.php";

		delUser($_GET['id']);
		session_start();
		$usuario = $_SESSION['usuarioAtual'];
		if($usuario->getId() == $_GET['id']){
			header('Location: logoff.php');
		}else{
			header('Location: home.php?p=');
		}
	
?>
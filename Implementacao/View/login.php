<?php




require_once("../DAO/UsuarioDAO.php");
require_once("logica-usuario.php");

$usuarioDAO = new UsuarioDAO($conexao);

$usuario = $usuarioDAO->buscaUsuario($_POST["email"],$_POST["senha"]);



if($usuario == null){
session_start();
	$_SESSION["danger"] = "Usuario ou senha inválida";
	
	header("Location: index.php");
}else{
	$_SESSION['permissao'] = $usuario['permissao'];
logaUsuario($usuario["email"]);
session_start();
	$_SESSION["success"] = "Usuário logado com sucesso!";
	
	header("Location: inicio.php");
}
die();
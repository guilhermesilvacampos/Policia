<?php


session_start();

function verificaUsuario(){
if(!usuarioEstaLogado()){
	session_start();
	$_SESSION["danger"] = "Você Não Tem Permissão para acessar esta página, se loga ai seu Bagabundu!";
	
	header("Location: index.php");
	die();
}	
}


function usuarioEstaLogado(){
	if(isset($_SESSION["usuario_logado"])){
		return true;
	}else{
		return false;
	}
	
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}


function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}


function verificaPermissao(){
	$admin = "admin";
 if($_SESSION["permissao"]===$admin){
 	return true;
 }else{
 	return false;
 }
}

function logout(){
	$_SESSION['permissao'] = null;
	session_destroy();
	session_start();
}
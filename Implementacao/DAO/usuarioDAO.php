<?php
require_once("conecta.php");

class UsuarioDAO{

private $conexao;

function __construct($conexao){
	$this->conexao=$conexao;
}


	function buscaUsuario($email,$senha){
	//$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($this->conexao,$email);
	$query = "select * from usuarios where email = '{$email}' and senha='{$senha}'";
	$resultado= mysqli_query($this->conexao,$query);
	return mysqli_fetch_assoc($resultado);
	}
}
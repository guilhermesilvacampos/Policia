<?php
require_once("../Model/delegado.php");

class DelegadoDAO{

private $conexao;

function __construct($conexao){
	$this->conexao = $conexao;
}


function listaDelegados(){


	$array = array();
	$resultado = mysqli_query($this->conexao,"select idDelegado, nomeDelegado from delegado");
	
while($delegado_atual = mysqli_fetch_assoc($resultado)){
	
	
	
	
		$delegado = new Delegado($delegado_atual['idDelegado'],$delegado_atual['nomeDelegado']);
		
	
	
	
	
	array_push($array,$delegado);
}
return $array;
}



}


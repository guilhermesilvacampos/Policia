<?php
require_once("../Model/equipe.php");

class EquipeDAO{

private $conexao;

function __construct($conexao){
	$this->conexao = $conexao;
}


function listaEquipe(){


	$array = array();
	$resultado = mysqli_query($this->conexao,"select idEquipe, nomeEquipe from equipe");
	
while($equipe_atual = mysqli_fetch_assoc($resultado)){
	
	
	
	
		$equipe = new Equipe($equipe_atual['idEquipe'],$equipe_atual['nomeEquipe']);
		
	
	
	
	
	array_push($array,$equipe);
}
return $array;
}



}
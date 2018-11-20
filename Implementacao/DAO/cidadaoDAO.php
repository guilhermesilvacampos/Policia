<?php
require_once("../Model/cidadao.php");

class CidadaoDAO{

private $conexao;

function __construct($conexao){
	$this->conexao = $conexao;
}



function insereCidadao(Cidadao $cidadao){
$cidadao->nomeCidadao = mysqli_real_escape_string($this->conexao,$cidadao->nomeCidadao);
$cidadao->alcunhaCidadao = mysqli_real_escape_string($this->conexao,$cidadao->alcunhaCidadao);



$query = "insert into cidadao (cpfCidadao,nomeCidadao, alcunhaCidadao,rgCidadao,dataCidadao,nacionalidadeCidadao, estadoCidadao,cidadeCidadao, ruaCidadao, numeroCasaCidadao, bairroCidadao) values ( '{$cidadao->cpfCidadao}','{$cidadao->nomeCidadao}','{$cidadao->alcunhaCidadao}','{$cidadao->rgCidadao}', '{$cidadao->dataCidadao}', '{$cidadao->nacionalidadeCidadao}','{$cidadao->estadoCidadao}','{$cidadao->cidadeCidadao}','{$cidadao->ruaCidadao}',{$cidadao->numeroCasaCidadao}, '{$cidadao->bairroCidadao}')";
//echo $query;
return mysqli_query($this->conexao,$query);	
}


function listaCidadao(){


	$array = array();
	$resultado = mysqli_query($this->conexao,"select * from cidadao");
	
while($cidadao_atual = mysqli_fetch_assoc($resultado)){
	
	
		$cidadao = new Cidadao($cidadao_atual['cpfCidadao'],$cidadao_atual['nomeCidadao'],$cidadao_atual['alcunhaCidadao'] ,$cidadao_atual['rgCidadao'],$cidadao_atual['dataCidadao'], $cidadao_atual['nacionalidadeCidadao'],$cidadao_atual['estadoCidadao'],$cidadao_atual['cidadeCidadao'],$cidadao_atual['ruaCidadao'],$cidadao_atual['numeroCasaCidadao'],$cidadao_atual['bairroCidadao']);
			
	
	
	array_push($array,$cidadao);
}
return $array;
}



function remover($cpfCidadao){

	$query = " DELETE FROM cidadao WHERE cpfCidadao = '{$cpfCidadao}'";

return mysqli_query($this->conexao,$query);	
}



}





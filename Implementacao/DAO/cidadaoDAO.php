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



}





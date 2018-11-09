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



$query = "insert into cidadao (nomeCidadao, alcunhaCidadao,rgCidadao,cpfCidadao,dataCidadao,nacionalidadeCidadao, estadoCidadao,cidadeCidadao, ruaCidadao, numeroCidadao, bairroCidadao) values ('{$cidadao->nomeCidadao}','{$cidadao->alcunhaCidadao}','{$cidadao->rgCidadao}', '{$cidadao->cpfCidadao}', '{$cidadao->dataCidadao}', '{$cidadao->nacionalidadeCidadao}','{$cidadao->estadoCidadao}','{$cidadao->cidadeCidadao}','{$cidadao->ruaCidadao}',{$cidadao->numeroCidadao}, '{$cidadao->bairroCidadao}')";
//echo $query;
return mysqli_query($this->conexao,$query);	
}



}





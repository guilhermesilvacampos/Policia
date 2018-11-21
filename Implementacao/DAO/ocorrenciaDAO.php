<?php
require_once("../Model/ocorrencia.php");
require_once("../Model/ocorrenciaBusca.php");

/**
* 
*/
class OcorrenciaDAO 
{
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}


function insereOcorrencia(Ocorrencia $ocorrencia){
 

$query = "INSERT into ocorrencia (estadoOcorrencia,cidadeOcorrencia,ruaOcorrencia,numeroCasaOcorrencia,bairroOcorrencia,dataOcorrencia,horaOcorrencia,idDelegado,segredoOcorrencia,statusOcorrencia) values ('{$ocorrencia->estadoOcorrencia}','{$ocorrencia->cidadeOcorrencia}', '{$ocorrencia->ruaOcorrencia}', {$ocorrencia->numeroCasaOcorrencia}, '{$ocorrencia->bairroOcorrencia}', '{$ocorrencia->dataOcorrencia}', '{$ocorrencia->horaOcorrencia}', {$ocorrencia->idDelegado}, '{$ocorrencia->segredoOcorrencia}', '{$ocorrencia->statusOcorrencia}')";


return mysqli_query($this->conexao,$query);
}


function buscaIdUltimaOcorrencia(){
	$query = mysqli_query($this->conexao,"SELECT MAX(idOcorrencia) from ocorrencia");

$resultado = mysqli_fetch_assoc($query);
	return $resultado;
}



function insereEnvolvido($idUltimaOcorrencia,$cpfEnvolvido,$tipoEnvolvimento){
	
$query = "INSERT into envolvidosocorrencia (idOcorrencia,cpfCidadao,tipoEnvolvimento) values ({$idUltimaOcorrencia},'{$cpfEnvolvido}','{$tipoEnvolvimento}')";

	return mysqli_query($this->conexao,$query);
}



function insereEquipe($idUltimaOcorrencia, $idPolicial){

	$query = "INSERT into equipeocorrencia (idOcorrencia, idEquipe) values ({$idUltimaOcorrencia},'{$idPolicial}')";

	return mysqli_query($this->conexao,$query);

}



function listaOcorrencia(){


	$array = array();
	$resultado = mysqli_query($this->conexao,"SELECT DISTINCT oc.*, de.nomeDelegado, ci.nomeCidadao, en.tipoEnvolvimento 
		from ocorrencia as oc
	    join delegado as de on oc.idDelegado = de.idDelegado
	    join envolvidosocorrencia as en on oc.idOcorrencia = en.idOcorrencia
	    join cidadao as ci on en.cpfCidadao= ci.cpfCidadao");
	
while($ocorrencia_atual = mysqli_fetch_assoc($resultado)){

	

	$ocorrencia = new OcorrenciaBusca($ocorrencia_atual['idOcorrencia'],$ocorrencia_atual['estadoOcorrencia'],$ocorrencia_atual['cidadeOcorrencia'], $ocorrencia_atual['ruaOcorrencia'],$ocorrencia_atual['numeroCasaOcorrencia'],$ocorrencia_atual['bairroOcorrencia'],$ocorrencia_atual['dataOcorrencia'],$ocorrencia_atual['horaOcorrencia'],$ocorrencia_atual['segredoOcorrencia'],$ocorrencia_atual['statusOcorrencia'],$ocorrencia_atual['nomeCidadao'],$ocorrencia_atual['nomeDelegado'],$ocorrencia_atual['tipoEnvolvimento']);

	array_push($array,$ocorrencia);
}
return $array;
}



}
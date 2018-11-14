<?php
require_once("../Model/ocorrencia.php");

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



function insereEnvolvido($idUltimaOcorrencia,$cpfEnvolvido){
	
$query = "INSERT into envolvidosocorrencia (idOcorrencia,cpfCidadao) values ({$idUltimaOcorrencia},'{$cpfEnvolvido}')";

	return mysqli_query($this->conexao,$query);
}



function insereEquipe($idUltimaOcorrencia, $idPolicial){

	$query = "INSERT into equipeocorrencia (idOcorrencia, idEquipe) values ({$idUltimaOcorrencia},'{$idPolicial}')";

	return mysqli_query($this->conexao,$query);

}


}
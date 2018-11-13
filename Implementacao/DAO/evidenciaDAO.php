<?php
require_once("../Model/evidencia.php");

/**
* 
*/
class EvidenciaDAO {

	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}


	function insereEvidencia(Evidencia $evidencia){

		$query = "INSERT INTO evidencia (idOcorrencia ,tipoEvidencia, numeroDeSerie, numeroDoCalibre, fabricanteArma, modeloArma, numeroDoIMEI, numeroDoCelular, fabricanteCelular, modeloCelular, cpfProprietario, nomeObjeto, descricaoObjeto, tipoSubstancia, pesoSubstancia, unidadeSubstancia, embalagem, chassi, placa, anoFabricacao, anoModelo, fabricanteVeiculo, modeloVeiculo, corVeiculo, armaDoCrime, objetoSubtraido , providencia, cpfCidadao) values ( {$evidencia->idOcorrencia} ,'{$evidencia->tipoEvidencia}', '{$evidencia->numeroDeSerie}', '{$evidencia->numeroDoCalibre}', '{$evidencia->fabricanteArma}', '{$evidencia->modeloArma}', '{$evidencia->numeroDoIMEI}', '{$evidencia->numeroDoCelular}', '{$evidencia->fabricanteCelular}', '{$evidencia->modeloCelular}', '{$evidencia->cpfProprietario}', '{$evidencia->nomeObjeto}', '{$evidencia->descricaoObjeto}', '{$evidencia->tipoSubstancia}', {$evidencia->pesoSubstancia}, '{$evidencia->unidadeSubstancia}', '{$evidencia->embalagem}', '{$evidencia->chassi}', '{$evidencia->placa}', '{$evidencia->anoFabricacao}', '{$evidencia->anoModelo}', '{$evidencia->fabricanteVeiculo}', '{$evidencia->modeloVeiculo}', '{$evidencia->corVeiculo}', '{$evidencia->armaDoCrime}', '{$evidencia->objetoSubtraido}' , '{$evidencia->providencia}', '{$evidencia->cpfCidadao}' )";


return mysqli_query($this->conexao,$query);
	}




}
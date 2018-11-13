<?php

/**
* 
*/
class Evidencia {
	
	public $idOcorrencia;
	public $tipoEvidencia;
   	public $numeroDeSerie; 
    public $numeroDoCalibre; 
    public $fabricanteArma; 
    public $modeloArma ;
    public $numeroDoIMEI; 
    public $numeroDoCelular ;
    public $fabricanteCelular; 
    public $modeloCelular ;
    public $cpfProprietario; 
    public $nomeObjeto ;
    public $descricaoObjeto; 
    public $tipoSubstancia ;
    public $pesoSubstancia ;
    public $unidadeSubstancia; 
    public $embalagem ;
    public $chassi ;
    public $placa ;
    public $anoFabricacao; 
    public $anoModelo ;
    public $fabricanteVeiculo; 
    public $modeloVeiculo ;
    public $corVeiculo ;
    public $armaDoCrime ;
    public $objetoSubtraido ;
    public $providencia ;
    public $cpfCidadao ;



	function __construct($idOcorrencia ,$tipoEvidencia , $numeroDeSerie , $numeroDoCalibre ,$fabricanteArma , $modeloArma , $numeroDoIMEI, $numeroDoCelular , $fabricanteCelular , $modeloCelular , $cpfProprietario , $nomeObjeto , $descricaoObjeto , $tipoSubstancia , $pesoSubstancia , $unidadeSubstancia , $embalagem, $chassi , $placa, $anoFabricacao, $anoModelo, $fabricanteVeiculo, $modeloVeiculo, $corVeiculo , $armaDoCrime, $objetoSubtraido , $providencia, $cpfCidadao)	{
		
	$this->idOcorrencia = $idOcorrencia; 
    $this->tipoEvidencia = $tipoEvidencia; 
    $this->numeroDeSerie = $numeroDeSerie;
    $this->numeroDoCalibre = $numeroDoCalibre; 
    $this->fabricanteArma  = $fabricanteArma;
    $this->modeloArma = $modeloArma; 
    $this->numeroDoIMEI = $numeroDoIMEI; 
    $this->numeroDoCelular = $numeroDoCelular; 
    $this->fabricanteCelular = $fabricanteCelular; 
    $this->modeloCelular = $modeloCelular; 
    $this->cpfProprietario = $cpfProprietario; 
    $this->nomeObjeto = $nomeObjeto; 
    $this->descricaoObjeto = $descricaoObjeto; 
    $this->tipoSubstancia = $tipoSubstancia; 
    $this->pesoSubstancia = $pesoSubstancia; 
    $this->unidadeSubstancia = $unidadeSubstancia; 
    $this->embalagem = $embalagem; 
    $this->chassi  = $chassi;
    $this->placa = $placa; 
    $this->anoFabricacao = $anoFabricacao; 
    $this->anoModelo = $anoModelo;
    $this->fabricanteVeiculo = $fabricanteVeiculo; 
    $this->modeloVeiculo = $modeloVeiculo; 
    $this->corVeiculo = $corVeiculo; 
    $this->armaDoCrime = $armaDoCrime; 
    $this->objetoSubtraido = $objetoSubtraido; 
    $this->providencia = $providencia;
    $this->cpfCidadao = $cpfCidadao; 


	}


function __toString(){
		return $this->idOcorrencia .
    $this->tipoEvidencia .
    $this->numeroDeSerie .
    $this->numeroDoCalibre .
    $this->fabricanteArma  .
    $this->modeloArma .
    $this->numeroDoIMEI .
    $this->numeroDoCelular .
    $this->fabricanteCelular . 
    $this->modeloCelular .
    $this->cpfProprietario .
    $this->nomeObjeto. 
    $this->descricaoObjeto .
    $this->tipoSubstancia . 
    $this->pesoSubstancia .
    $this->unidadeSubstancia .
    $this->embalagem .
    $this->chassi  .
    $this->placa .
    $this->anoFabricacao . 
    $this->anoModelo .
    $this->fabricanteVeiculo . 
    $this->modeloVeiculo .
    $this->corVeiculo .
    $this->armaDoCrime .
    $this->objetoSubtraido . 
    $this->providencia .
    $this->cpfCidadao ;
	}





}
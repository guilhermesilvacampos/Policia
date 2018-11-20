<?php

/**
* 
*/
class OcorrenciaBusca {

public $idOcorrencia;
  public $estadoOcorrencia;
public $cidadeOcorrencia ;
public $ruaOcorrencia ;
public $numeroCasaOcorrencia ;
public $bairroOcorrencia ;
public $dataOcorrencia;
public $horaOcorrencia ;
public $idDelegado ;
public $segredoOcorrencia;
public $statusOcorrencia ;
public $nomeCidadao;
public $nomeDelegado;

	
	function __construct($estadoOcorrencia, $cidadeOcorrencia, $ruaOcorrencia, $numeroCasaOcorrencia,$bairroOcorrencia, $dataOcorrencia, $horaOcorrencia, $segredoOcorrencia,$statusOcorrencia,$nomeCidadao,$nomeDelegado ){

		$this->estadoOcorrencia = $estadoOcorrencia;
		$this->cidadeOcorrencia = $cidadeOcorrencia;
		$this->ruaOcorrencia = $ruaOcorrencia;
		$this->numeroCasaOcorrencia = $numeroCasaOcorrencia;
		$this->bairroOcorrencia = $bairroOcorrencia;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->horaOcorrencia = $horaOcorrencia;
		$this->segredoOcorrencia = $segredoOcorrencia;
		$this->statusOcorrencia = $statusOcorrencia;
		$this->nomeCidadao = $nomeCidadao;
		$this->nomeDelegado = $nomeDelegado;

		
	}

	
}
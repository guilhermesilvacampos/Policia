<?php

/**
* 
*/
class Ocorrencia {

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

	
	function __construct($estadoOcorrencia, $cidadeOcorrencia, $ruaOcorrencia, $numeroCasaOcorrencia,$bairroOcorrencia, $dataOcorrencia, $horaOcorrencia, $idDelegado, $segredoOcorrencia,$statusOcorrencia ){

		$this->estadoOcorrencia = $estadoOcorrencia;
		$this->cidadeOcorrencia = $cidadeOcorrencia;
		$this->ruaOcorrencia = $ruaOcorrencia;
		$this->numeroCasaOcorrencia = $numeroCasaOcorrencia;
		$this->bairroOcorrencia = $bairroOcorrencia;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->horaOcorrencia = $horaOcorrencia;
		$this->idDelegado = $idDelegado;
		$this->segredoOcorrencia = $segredoOcorrencia;
		$this->statusOcorrencia = $statusOcorrencia;
		
	}

	
}
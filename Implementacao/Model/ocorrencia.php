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
public $delegadoOcorrencia ;
public $equipeOcorrencia ;
public $segredoOcorrencia;
public $statusOcorrencia ;

	
	function __construct($estadoOcorrencia, $cidadeOcorrencia, $ruaOcorrencia, $numeroCasaOcorrencia,$bairroOcorrencia, $dataOcorrencia, $horaOcorrencia, $delegadoOcorrencia, $equipeOcorrencia, $segredoOcorrencia,$statusOcorrencia ){

		$this->$estadoOcorrencia = $estadoOcorrencia;
		$this->$cidadeOcorrencia = $cidadeOcorrencia;
		$this->$ruaOcorrencia = $ruaOcorrencia;
		$this->$numeroCasaOcorrencia = $numeroCasaOcorrencia;
		$this->$bairroOcorrencia = $bairroOcorrencia;
		$this->$dataOcorrencia = $dataOcorrencia;
		$this->$horaOcorrencia = $horaOcorrencia;
		$this->$delegadoOcorrencia = $delegadoOcorrencia;
		$this->$equipeOcorrencia  = $equipeOcorrencia;
		$this->$segredoOcorrencia = $segredoOcorrencia;
		$this->statusOcorrencia = $statusOcorrencia;
		
	}

	
}
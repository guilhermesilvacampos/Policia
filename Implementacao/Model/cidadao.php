<?php
/**
* 
*/
class Cidadao {
	
	public $cpfCidadao;
	public $nomeCidadao;
	public $alcunhaCidadao;
	public $rgCidadao;
	public $dataCidadao;
	public $nacionalidadeCidadao;
	public $estadoCidadao;
	public $cidadeCidadao;
	public $ruaCidadao;
	public $numeroCasaCidadao;
	public $bairroCidadao;








	function __construct($cpfCidadao,$nomeCidadao, $alcunhaCidadao, $rgCidadao,$dataCidadao, $nacionalidadeCidadao, $estadoCidadao, $cidadeCidadao,$ruaCidadao, $numeroCasaCidadao, $bairroCidadao) {
		
		$this->cpfCidadao = $cpfCidadao;
		$this->nomeCidadao = $nomeCidadao;
		$this->alcunhaCidadao= $alcunhaCidadao;
		$this->rgCidadao = $rgCidadao;
		$this->dataCidadao = $dataCidadao;
		$this->nacionalidadeCidadao = $nacionalidadeCidadao;
		$this->estadoCidadao = $estadoCidadao;
		$this->cidadeCidadao = $cidadeCidadao;
		$this->ruaCidadao = $ruaCidadao;
		$this->numeroCasaCidadao = $numeroCasaCidadao;
		$this->bairroCidadao = $bairroCidadao;
		
	}


	




	



	function __toString(){
		return $this->nomeCidadao ." , " . $this->cpfCidadao;
	}




}
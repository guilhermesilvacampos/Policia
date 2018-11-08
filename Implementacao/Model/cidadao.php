<?php
/**
* 
*/
class Cidadao {
	
	public $idCidadao;
	public $nomeCidadao;
	public $alcunhaCidadao;
	public $rgCidadao;
	public $cpfCidadao;
	public $dataCidadao;
	public $nacionalidadeCidadao;
	public $estadoCidadao;
	public $cidadeCidadao;
	public $ruaCidadao;
	public $numeroCidadao;
	public $bairroCidadao;








	function __construct($nomeCidadao, $alcunhaCidadao, $rgCidadao, $cpfCidadao,$dataCidadao, $nacionalidadeCidadao, $estadoCidadao, $cidadeCidadao,$ruaCidadao, $numeroCidadao, $bairroCidadao) {

		$this->nomeCidadao = $nomeCidadao;
		$this->alcunhaCidadao= $alcunhaCidadao;
		$this->rgCidadao = $rgCidadao;
		$this->cpfCidadao = $cpfCidadao;
		$this->dataCidadao = $dataCidadao;
		$this->nacionalidadeCidadao = $nacionalidadeCidadao;
		$this->estadoCidadao = $estadoCidadao;
		$this->cidadeCidadao = $cidadeCidadao;
		$this->ruaCidadao = $ruaCidadao;
		$this->numeroCidadao = $numeroCidadao;
		$this->bairroCidadao = $bairroCidadao;
		
	}



	function __toString(){
		return $this->nomeCidadao ." , " . $this->cpfCidadao;
	}




}
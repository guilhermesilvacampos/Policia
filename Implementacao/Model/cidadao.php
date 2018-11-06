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








	function __construct($nomeCidadao= "indefinido", $alcunhaCidadao = "indefinido", $rgCidadao=9999, $cpfCidadao=9999,$dataCidadao="25/09/2000", $nacionalidadeCidadao="Brasileira", $estadoCidadao="MS", $cidadeCidadao="Campo Grande",$ruaCidadao="rua das garças", $numeroCidadao=1234, $bairroCidadao="jardim morumbi") {

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
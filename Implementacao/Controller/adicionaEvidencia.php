<?php require_once("../View/cabecalho.php");

require_once("../Model/evidencia.php");
require_once("../DAO/evidenciaDAO.php");

 session_destroy();


if(isset( $_POST ['numeroDoIMEI'])){
	 $_POST ['numeroDoIMEI'] = "Indefinido";
}

if(isset( $_POST ['numeroDoCelular'])){
	 $_POST ['numeroDoCelular'] = "Indefinido";
}

if(isset( $_POST ['fabricanteCelular'])){
	 $_POST ['fabricanteCelular'] = "Indefinido";
}

if(isset( $_POST ['modeloCelular'])){
	 $_POST ['modeloCelular'] = "Indefinido";
}

if(isset( $_POST ['cpfProprietario'])){
	 $_POST ['cpfProprietario'] = "Indefinido";
}

if(isset( $_POST ['nomeObjeto'])){
	 $_POST ['nomeObjeto'] = "Indefinido";
}

if(isset( $_POST ['descricaoObjeto'])){
	 $_POST ['descricaoObjeto'] = "Indefinido";
}

if(isset( $_POST ['tipoSubstancia'])){
	 $_POST ['tipoSubstancia'] = "Indefinido";
}

if(isset( $_POST ['pesoSubstancia'])){
	 $_POST ['pesoSubstancia'] = 999.9;
}

if(isset( $_POST ['unidadeSubstancia'])){
	 $_POST ['unidadeSubstancia'] = "Indefinido";
}

if(isset( $_POST ['embalagem'])){
	 $_POST ['embalagem'] = "Indefinido";
}

if(isset( $_POST ['chassi'])){
	 $_POST ['chassi'] = "Indefinido";
}

if(isset( $_POST ['placa'])){
	 $_POST ['placa'] = "Indefinido";
}

if(isset( $_POST ['anoFabricacao'])){
	 $_POST ['anoFabricacao'] = 9999;
}

if(isset( $_POST ['anoModelo'])){
	 $_POST ['anoModelo'] = 9999;
}

if(isset( $_POST ['fabricanteVeiculo'])){
	 $_POST ['fabricanteVeiculo'] = "Indefinido";
}

if(isset( $_POST ['modeloVeiculo'])){
	 $_POST ['modeloVeiculo'] = "Indefinido";
}

if(isset( $_POST ['corVeiculo'])){
	 $_POST ['corVeiculo'] = "Indefinido";
}


$evidencia = new Evidencia($_POST ['idOcorrencia'], $_POST ['tipoEvidencia'], $_POST ['numeroDeSerie'],
	$_POST ['numeroDoCalibre'], $_POST ['fabricanteArma'], $_POST ['modeloArma'], $_POST ['numeroDoIMEI'], 
	$_POST ['numeroDoCelular'], $_POST ['fabricanteCelular'], $_POST ['modeloCelular'], $_POST ['cpfProprietario'], 
	$_POST ['nomeObjeto'], $_POST ['descricaoObjeto'], $_POST ['tipoSubstancia'], $_POST ['pesoSubstancia'], 
    $_POST ['unidadeSubstancia'], $_POST ['embalagem'], $_POST ['chassi'], $_POST ['placa'], $_POST ['anoFabricacao'], 
    $_POST ['anoModelo'], $_POST ['fabricanteVeiculo'], $_POST ['modeloVeiculo'], $_POST ['corVeiculo'], 
    $_POST ['armaDoCrime'], $_POST ['objetoSubtraido'], $_POST ['providencia'], $_POST ['cpfCidadao'] );



$evidenciaDAO = new EvidenciaDAO($conexao);

if($evidenciaDAO->insereEvidencia($evidencia)){ ?>

 <?php
 session_start();




 $_SESSION["success"] = " A Evidencia foi inserida com sucesso!";
	
	//header("Location:C:/xampp/htdocs/Policia/Implementacao/View/index.php");
	header("Location:../View/inicio.php",  true,  302 );

 ?>

<?php } else {

	

$msg = mysqli_error($conexao);
session_start();
  $_SESSION["danger"] = "A Evidencia não foi inserida". $msg." ";
	
	
	header("Location:../View/inicio.php",  true,  302 );

}
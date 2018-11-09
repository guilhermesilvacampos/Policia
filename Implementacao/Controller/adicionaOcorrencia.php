<?php

require_once("../View/cabecalho.php");

require_once("../Model/ocorrencia.php");
require_once("../DAO/ocorrenciaDAO.php");


//echo $_POST ['estadoOcorrencia'] ;
//echo "<br>";
//echo $_POST ['cidadeOcorrencia'] ;
//echo "<br>";
//echo $_POST ['ruaOcorrencia'] ;
//echo "<br>";
//echo $_POST ['numeroCasaOcorrencia'] ;
//echo "<br>";
//echo $_POST ['bairroOcorrencia'] ;
//echo "<br>";
//echo $_POST ['dataOcorrencia'] ;
//echo "<br>";
//echo $_POST ['horaOcorrencia'] ;
//echo "<br>";
//echo $_POST ['delegadoOcorrencia'] ;
//echo "<br>";
//echo $_POST ['equipeOcorrencia'] ;
//echo "<br>";
$_POST['segredoOcorrencia'] = (isset($_POST['segredoOcorrencia']) ) ? "true" : "false";
//echo "<br>";
//echo $_POST ['statusOcorrencia'] ;
//echo "<br>";



$ocorrencia = new Ocorrencia($_POST ['estadoOcorrencia'], $_POST ['cidadeOcorrencia'], $_POST ['ruaOcorrencia'], $_POST ['numeroCasaOcorrencia'],  $_POST ['bairroOcorrencia'], $_POST ['dataOcorrencia'], $_POST ['horaOcorrencia'], $_POST ['delegadoOcorrencia'], $_POST ['equipeOcorrencia'], $_POST['segredoOcorrencia'], $_POST ['statusOcorrencia']);


$ocorrenciaDAO = new OcorrenciaDAO($conexao);

$inseriuNaTabela = true;

if($ocorrenciaDAO->insereOcorrencia($ocorrencia)){

	$idUltimaOcorrencia = $ocorrenciaDAO->buscaIdUltimaOcorrencia();

	foreach ($idUltimaOcorrencia as $key) {
		$idUltimaOcorrencia1 = $key;
		echo $idUltimaOcorrencia1;
	}

	

	foreach ($_POST ['pessoasEnvolvidasArray'] as $cpfEnvolvido) {
		if($ocorrenciaDAO->insereEnvolvido($idUltimaOcorrencia1,$cpfEnvolvido)){
			$inseriuNaTabela = true;
		}else{
			$inseriuNaTabela = false;
		}

	}

}


 if($inseriuNaTabela){ ?>

 <?php
 session_start();

 

$_SESSION['idOcorrencia'] = $idUltimaOcorrencia1;
 $_SESSION["success"] = " A Ocorrencia foi inserida com sucesso!";
	
	//header("Location:C:/xampp/htdocs/Policia/Implementacao/View/index.php");
	header("Location:../View/cadastrarEvidencia.php",  true,  302 );

 ?>

<?php } else {

	

$msg = mysqli_error($conexao);
session_start();
  $_SESSION["danger"] = "A Ocorrencia não foi inserida". $msg." ";
	
	
	header("Location:../View/inicio.php",  true,  302 );

}

















mysqli_close($conexao);











 include("../View/rodape.php");

<?php

require_once("C:/xampp/htdocs/Policia/Implementacao/View/cabecalho.php");

require_once("C:/xampp/htdocs/Policia/Implementacao/Model/ocorrencia.php");
require_once("C:/xampp/htdocs/Policia/Implementacao/DAO/ocorrenciaDAO.php");


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



$ocorrencia = new Ocorrencia($_POST ['estadoOcorrencia'], $_POST ['cidadeOcorrencia'], $_POST ['ruaOcorrencia'], $_POST ['numeroCasaOcorrencia'],  $_POST ['bairroOcorrencia'], $_POST ['dataOcorrencia'], $_POST ['dataOcorrencia'], $_POST ['horaOcorrencia'], $_POST ['delegadoOcorrencia'], $_POST ['delegadoOcorrencia'], $_POST ['equipeOcorrencia'], $_POST['segredoOcorrencia'], $_POST ['statusOcorrencia']);


$ocorrenciaDAO = new OcorrenciaDAO($conexao);



 if($ocorrenciaDAO->insereOcorrencia($ocorrencia)){ ?>

 <?php
 session_start();

 


 $_SESSION["success"] = " A Ocorrencia foi inserida com sucesso!";
	
	//header("Location:C:/xampp/htdocs/Policia/Implementacao/View/index.php");
	header("Location:../View/inicio.php",  true,  302 );

 ?>

<?php } else {

	

$msg = mysqli_error($conexao);
session_start();
  $_SESSION["danger"] = "A Ocorrencia não foi inserida". $msg." ";
	
	
	header("Location:../View/inicio.php",  true,  302 );

}


$idUltimaOcorrencia = $ocorrenciaDAO->buscaIdUltimaOcorrencia();



foreach ($_POST ['pessoasEnvolvidasArray'] as $envolvido) {
	$ocorrenciaDAO->insereEnvolvido($idUltimaOcorrencia,$envolvido);
}










mysqli_close($conexao);











 include("C:/xampp/htdocs/Policia/Implementacao/View/rodape.php");

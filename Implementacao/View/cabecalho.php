
<?php 

function carregaClasseController($nomeDaClasse){
	require_once("Controller/".$nomeDaClasse.".php");
}
function carregaClasseDAO($nomeDaClasse){
    require_once("DAO/".$nomeDaClasse.".php");
}
function carregaClasseModel($nomeDaClasse){
    require_once("Model/".$nomeDaClasse.".php");
}
function carregaClasseView($nomeDaClasse){
    require_once("View/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasseController");
spl_autoload_register("carregaClasseDAO");
spl_autoload_register("carregaClasseModel");
spl_autoload_register("carregaClasseView");

error_reporting(E_ALL ^ E_NOTICE);

require_once("C:/xampp/htdocs/Policia/Implementacao/DAO/conecta.php");
?>
<html>

<head>
	<meta charset= "utf-8">
	<title>Polícia</title>
	<link href= css/bootstrap.css rel="stylesheet">
</head>
<body>

		

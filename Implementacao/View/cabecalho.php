<?php

function carregaClasseController($nomeDaClasse)
{
    require_once("Controller/" . $nomeDaClasse . ".php");
}

function carregaClasseDAO($nomeDaClasse)
{
    require_once("DAO/" . $nomeDaClasse . ".php");
}

function carregaClasseModel($nomeDaClasse)
{
    require_once("Model/" . $nomeDaClasse . ".php");
}

function carregaClasseView($nomeDaClasse)
{
    require_once("View/" . $nomeDaClasse . ".php");
}

spl_autoload_register("carregaClasseController");
spl_autoload_register("carregaClasseDAO");
spl_autoload_register("carregaClasseModel");
spl_autoload_register("carregaClasseView");

error_reporting(E_ALL ^ E_NOTICE);

//require_once("C:/xampp/htdocs/Policia/Implementacao/DAO/conecta.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Polícia</title>
    <link href=css/bootstrap.css rel="stylesheet">
    <link href="css/padrao.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>


		

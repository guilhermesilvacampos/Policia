<?php require_once("C:/xampp/htdocs/Policia/Implementacao/View/cabecalho.php");

require_once("C:/xampp/htdocs/Policia/Implementacao/Model/cidadao.php");
require_once("C:/xampp/htdocs/Policia/Implementacao/DAO/cidadaoDAO.php");


$cidadao = new Cidadao($_POST ['nomeCidadao'],$_POST ['alcunhaCidadao'],$_POST ['rgCidadao'],$_POST ['cpfCidadao'],$_POST ['dataCidadao'],$_POST ['nacionalidadeCidadao'],$_POST ['estadoCidadao'],$_POST ['cidadeCidadao'],$_POST ['ruaCidadao'],$_POST ['numeroCidadao'],$_POST ['bairroCidadao']);


$cidadaoDAO = new CidadaoDAO($conexao);

$nome = $cidadao->nomeCidadao;

 if($cidadaoDAO->insereCidadao($cidadao)){ ?>

 <?php
 session_start();

 


 $_SESSION["success"] = " O Cidadão "." ".$nome.", foi inserido com sucesso!";
	
	//header("Location:C:/xampp/htdocs/Policia/Implementacao/View/index.php");
	header("Location:../View/inicio.php",  true,  302 );

 ?>

<?php } else {

	

$msg = mysqli_error($conexao);
session_start();
  $_SESSION["danger"] = "O Cidadão "." ".$nome.", não foi adicionado". $msg." ";
	
	
	header("Location:../View/inicio.php",  true,  302 );

}



mysqli_close($conexao);



 


include("C:/xampp/htdocs/Policia/Implementacao/View/rodape.php");
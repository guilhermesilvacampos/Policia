<?php require_once("../View/cabecalho.php");

require_once("../Model/cidadao.php");
require_once("../DAO/cidadaoDAO.php");


$cidadao = new Cidadao($_POST ['cpfCidadao'],$_POST ['nomeCidadao'],$_POST ['alcunhaCidadao'],$_POST ['rgCidadao'],$_POST ['dataCidadao'],$_POST ['nacionalidadeCidadao'],$_POST ['estadoCidadao'],$_POST ['cidadeCidadao'],$_POST ['ruaCidadao'],$_POST ['numeroCasaCidadao'],$_POST ['bairroCidadao']);


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



 


include("../View/rodape.php");
<?php require_once("../View/cabecalho.php");

require_once("../Model/cidadao.php");
require_once("../DAO/cidadaoDAO.php");

$cpfCidadao = $_POST['cpfCidadao'];
$cidadaoDAO = new CidadaoDAO($conexao);



if($cidadaoDAO->remover($cpfCidadao)){ ?>

 <?php
 session_start();

 


 $_SESSION["success"] = " O Cidadão "." ".$cpfCidadao.", foi deletado com sucesso!";
	
	//header("Location:C:/xampp/htdocs/Policia/Implementacao/View/index.php");
	header("Location:../View/inicio.php",  true,  302 );

 ?>

<?php } else {

	

$msg = mysqli_error($conexao);
session_start();
  $_SESSION["danger"] = "O Cidadão "." ".$cpfCidadao.", não foi deletado". $msg." ";
	
	
	header("Location:../View/inicio.php",  true,  302 );

}



mysqli_close($conexao);



 


include("../View/rodape.php");

<?php require_once("C:/xampp/htdocs/Policia/Implementacao/View/cabecalho.php");

require_once("C:/xampp/htdocs/Policia/Implementacao/Model/cidadao.php");
require_once("C:/xampp/htdocs/Policia/Implementacao/DAO/cidadaoDAO.php");


$cidadao = new Cidadao($_POST ['nomeCidadao'],$_POST ['alcunhaCidadao'],$_POST ['rgCidadao'],$_POST ['cpfCidadao'],$_POST ['dataCidadao'],$_POST ['nacionalidadeCidadao'],$_POST ['estadoCidadao'],$_POST ['cidadeCidadao'],$_POST ['ruaCidadao'],$_POST ['numeroCidadao'],$_POST ['bairroCidadao']);


$cidadaoDAO = new CidadaoDAO($conexao);



 if($cidadaoDAO->insereCidadao($cidadao)){ ?>

	<p class = "text-success"> Cidadão <?= $cidadao->nomeCidadao ?>, inserido com sucesso! </p>
<?php } else {

$msg = mysqli_error($conexao);

 ?>

	<p class = "text-danger"> O Cidadão <?= $cidadao->nomeCidadao ?> não foi adiicionado <?= $msg ?>  </p>
<?php
}



mysqli_close($conexao);



 ?>


<?php include("C:/xampp/htdocs/Policia/Implementacao/View/rodape.php");
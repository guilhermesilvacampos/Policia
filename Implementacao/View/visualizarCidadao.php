<?php
require_once("cabecalho.php");
require_once("padrao.php");

require_once("../Model/cidadao.php");
require_once("../DAO/cidadaoDAO.php");

$cidadaoDAO = new CidadaoDAO($conexao);
$listaCidadao = $cidadaoDAO->listaCidadao();


?>
<link href="css/visualizarCidadao.css" rel="stylesheet">

	<div class="conteudo">

<table id="table1">
	
		<tr id="tr1">
			
				<th id="th1">Nome</th>
				<th id="th1">CPF</th>
				<th id="th1">RG</th>
				<th id="th1">Data de Nascimento</th>
				<th id="th1">Estado</th>
				<th id="th1">Cidade</th>
				<th id="th1">Rua</th>
				<th id="th1">Numero</th>
				<th id="th1">Bairro</th>
				<th id="th1">Editar</th>
				<th id="th1">Remover</th>
			
</tr>

<?php
foreach ($listaCidadao as $cidadao) {
	?>
<tr id="tr1">
	<td id="td1"><?= $cidadao->nomeCidadao ?> </td>
	<td id="td1"><?= $cidadao->cpfCidadao ?> </td>
	<td id="td1"><?= $cidadao->rgCidadao ?> </td>
	<td id="td1"><?= $cidadao->dataCidadao ?> </td>
	<td id="td1"><?= $cidadao->estadoCidadao ?> </td>
	<td id="td1"><?= $cidadao->cidadeCidadao ?> </td>
	<td id="td1"><?= $cidadao->ruaCidadao ?> </td>
	<td id="td1"><?= $cidadao->numeroCasaCidadao ?> </td>
	<td id="td1"><?= $cidadao->bairroCidadao ?> </td>

	<td id="td1"> 
		<form action="editarCidadao.php" method="post" >
			<input type="hidden" name="cpfCidadao" value="<?=$cidadao->cpfCidadao?>" ></input>
			<button  class="btn btn-warning" >Editar</button>
		</form>
	</td>
	
	<td id="td1"> 
		<form action="../Controller/removeCidadao.php" method="post" >
			<input type="hidden" name="cpfCidadao" value="<?=$cidadao->cpfCidadao?>" ></input>
			<button  class="btn btn-danger" >Remover</button>
		</form>
 	</td>

</tr>



<?php	
}

?>
		

	


</table>

	</div>






<?php
require_once ("rodape.php");
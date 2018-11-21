<?php
require_once("cabecalho.php");
require_once("padrao.php");

require_once("../Model/ocorrencia.php");
require_once("../DAO/ocorrenciaDAO.php");

$ocorrenciaDAO = new OcorrenciaDAO($conexao);
$listaOcorrencia = $ocorrenciaDAO->listaOcorrencia();


?>
<link href="css/visualizarOcorrencia.css" rel="stylesheet">

	<div class="conteudo">

<table id="table1">
	
		<tr id="tr1">
			
				<th id="th1">Estado</th>
				<th id="th1">Cidade</th>
				<th id="th1">Rua</th>
				<th id="th1">Numero da Casa</th>
				<th id="th1">Bairro</th>
				<th id="th1">Data</th>
				<th id="th1">Hora</th>
				<th id="th1">Delegado</th>
				<th id="th1">Segredo</th>
				<th id="th1">Status</th>
				<th id="th1">Cidadão Envolvido</th>
				<th id="th1">Envolvimento</th>
				<th id="th1">Editar</th>
				<th id="th1">Excluir</th>
			
</tr>

<?php
foreach ($listaOcorrencia as $ocorrencia) {
	?>
<tr id="tr1">
	<td id="td1"><?= $ocorrencia->estadoOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->cidadeOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->ruaOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->numeroCasaOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->bairroOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->dataOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->horaOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->nomeDelegado ?> </td>
	<td id="td1"><?= $ocorrencia->segredoOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->statusOcorrencia ?> </td>
	<td id="td1"><?= $ocorrencia->nomeCidadao ?> </td>
	<td id="td1"><?= $ocorrencia->tipoEnvolvimento ?> </td>
	<td id="td1"> 
		<form action="editarOcorrencia.php" method="post" >
			<input type="hidden" name="idOcorrencia" value="<?=$ocorrencia->idOcorrencia?>" ></input>
			<button  class="btn btn-warning" >Editar</button>
		</form>
	</td>
	
	<td id="td1"> 
		<form action="../Controller/removeOcorrencia.php" method="post" >
			<input type="hidden" name="idOcorrencia" value="<?=$ocorrencia->idOcorrencia?>" ></input>
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
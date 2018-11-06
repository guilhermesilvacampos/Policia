<?php
/**
 * Created by PhpStorm.
 * User: Gui
 * Date: 01/10/2018
 * Time: 17:08
 */

require_once ("cabecalho.php");
require_once("padrao.php");
?>


 <link href="css/cadastrarOcorrencia.css" rel="stylesheet">

    <div class="conteudo">

    <div>
        <legend><h1 class="col-md-offset-1">Cadastrar Ocorrência</h1></legend>
    </div>

    <form action="aqui vai o  nome da classe que vai ser enviado o form" method="post">

        <div class="inputs">

        	

			<div class="form-group">
    <label for="estado">Estado</label>
    <select  id="estado" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

<div class="form-group">
    <label for="cidade">Cidade</label>
    <select  id="cidade" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  <div class="form-group">
    <table>
      <tr>
        <td class="col-md-2">
<div class="form-group">
          <label for="rua">Rua</label>
    <input type="text" id="rua" class="form-control form-control-lg" placeholder="Digite a rua em que ocorreu o crime" required>
</div>
     </td>
    <td>
<div class="form-group">
      <label for="numero">Número</label>
    <input type="number" id="numero" class="form-control form-control-lg"  required> 
</div>
  </td>

      </tr>
    </table>

  </div>

<div class="form-group">
          <label for="bairro">Bairro</label>
    <input type="text" id="bairro" class="form-control form-control-lg" placeholder="Digite o bairro onde ocorreu o crime" required>
</div>

<div class="form-group">
    <label for="data">Data do Crime</label>
    <input type="date" id="data" class="form-control form-control-lg"  >
  </div>

  <div class="form-group">
    <label for="hora">Hora do Crime</label>
    <input type="time" id="hora" class="form-control form-control-lg"  >
  </div>
  
<div class="form-group">
    <label for="delegado">Delegado Responsável</label>
    <select  id="delegado" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  <div class="form-group">
    <label for="equipe">Equipe Envolvida</label>
    <select  id="equipe" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  <div>
        <input type="checkbox" id="segredo" value="segredo" />
        <label for="segredo">Segredo de Justiça</label>
    </div>

    <div class="form-group">
    <label for="status">Status</label>
    <select  id="status" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>


  <div class="form-group">
  	<label for="pessoasEnvolvidas">Pessoas Envolvidas(não sei como vamos fazer pasa selecionar as pessoas)</label>


  </div>

<button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>
</div>




<?php
require_once ("rodape.php");
?>

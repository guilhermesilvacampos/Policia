<?php
require_once("cabecalho.php");
require_once("padrao.php");

?>
<link href="css/cadastrarCidadao.css" rel="stylesheet">

	<div class="conteudo">

<form>
<div class="inputs">
  <div class="form-group">


    <label for="nome">Nome</label>
    <input type="text" id="nome" class="form-control"  placeholder="Digite o Nome Completo do Cidadão">
    
  </div>
  <div class="form-group">
    <label for="alcunha">Alcunha</label>
    <input type="text" id="alcunha" class="form-control"  >
  </div>

  <div class="form-group">
    <label for="rg">RG</label>
    <input type="integer" id="rg" class="form-control"  >
  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="integer" id="cpf" class="form-control"  >
  </div>

  <div class="form-group">
    <label for="data">Data de Nascimento</label>
    <input type="date" id="data" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="nacionalidade">Nacionalidade</label>
    <select  id="nacionalidade" class="form-control">
  <option>Default select</option>
</select>
  </div>

  

<div class="form-group">
    <label for="estado">Estado</label>
    <select  id="estado" class="form-control">
  <option>Default select</option>
</select>
  </div>

<div class="form-group">
    <label for="cidade">Cidade</label>
    <select  id="cidade" class="form-control">
  <option>Default select</option>
</select>
  </div>

  <div class="form-group">
    <table>
      <tr>
        <td class="col-md-3">
<div class="form-group">
          <label for="rua">Rua</label>
    <input type="text" id="rua" class="form-control"  >
</div>
     </td>
    <td>
<div class="form-group">
      <label for="numero">Número</label>
    <input type="text" id="numero" class="form-control"  > 
</div>
  </td>

      </tr>
    </table>

  </div>
  


  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>

</div>

<?php
require_once("rodape.php");
<?php
require_once("cabecalho.php");
require_once("padrao.php");

?>
<link href="css/cadastrarCidadao.css" rel="stylesheet">

	<div class="conteudo">

<form action="/Policia/Implementacao/Controller/adicionaCidadao.php" method="post">
<div class="inputs">
  <div class="form-group">


    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nomeCidadao" class="form-control form-control-lg"  placeholder="Digite o Nome Completo do Cidadão" required>
    
  </div>
  <div class="form-group">
    <label for="alcunha">Alcunha</label>
    <input type="text" id="alcunha" name="alcunhaCidadao" class="form-control form-control-lg"  required>
  </div>

  <div class="form-group">
    <label for="rg">RG</label>
    <input type="number" id="rg" name="rgCidadao" class="form-control form-control-lg" required >
  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="number" id="cpf" name="cpfCidadao" class="form-control form-control-lg" required >
  </div>

  <div class="form-group">
    <label for="data">Data de Nascimento</label>
    <input type="date" id="data" name="dataCidadao" class="form-control form-control-lg" required >
  </div>
  <div class="form-group">
    <label for="nacionalidade">Nacionalidade</label>
    <select  id="nacionalidade" name="nacionalidadeCidadao" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  

<div class="form-group">
    <label for="estado">Estado</label>
    <select  id="estado" name="estadoCidadao" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

<div class="form-group">
    <label for="cidade">Cidade</label>
    <select  id="cidade" name="cidadeCidadao" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  <div class="form-group">
    <table>
      <tr>
        <td class="col-md-3">
<div class="form-group">
          <label for="rua">Rua</label>
    <input type="text" id="rua" name="ruaCidadao" class="form-control form-control-lg" required >
</div>
     </td>
    <td>
<div class="form-group">
      <label for="numero">Número</label>
    <input type="number" id="numero" name="numeroCidadao" class="form-control form-control-lg" required > 
</div>
  </td>

      </tr>
    </table>

  </div>

  <div class="form-group">
          <label for="bairro">Bairro</label>
    <input type="text" id="bairro" name="bairroCidadao" class="form-control form-control-lg" required >
</div>
  


  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  

</div>
</form>

</div>

<?php
require_once("rodape.php");
<?php
require_once("cabecalho.php");
require_once("padrao.php");

?>
<link href="css/cadastrarCidadao.css" rel="stylesheet">

	<div class="conteudo">

<form action="../Controller/adicionaCidadao.php" method="post">
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
    <input type="text" id="nacionalidade" name="nacionalidadeCidadao" class="form-control form-control-lg"  required>
  </div>

<div class="form-group">
    <label for="estados">Estado</label>
    <select  id="estados" name="estadoCidadao" class="form-control form-control-lg" required>
  
</select>
  </div>

<div class="form-group">
    <label for="cidades">Cidade</label>
    <select  id="cidades" name="cidadeCidadao" class="form-control form-control-lg" required>
  
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
    <input type="number" id="numero" name="numeroCasaCidadao" class="form-control form-control-lg" required > 
</div>
  </td>

      </tr>
    </table>

  </div>

  <div class="form-group">
          <label for="bairro">Bairro</label>
    <input type="text" id="bairro" name="bairroCidadao" class="form-control form-control-lg" required >
</div>
  


  <button type="submit"  class="btn btn-success btn-lg">Cadastrar</button>
  </div>
  

</div>
</form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript"> 
    
    $(document).ready(function () {
    
      $.getJSON('estados_cidades.js', function (data) {
        var items = [];
        var options = '<option value="">escolha um estado</option>';  
        $.each(data, function (key, val) {
          options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });         
        $("#estados").html(options);        
        
        $("#estados").change(function () {        
        
          var options_cidades = '';
          var str = "";         
          
          $("#estados option:selected").each(function () {
            str += $(this).text();
          });
          
          $.each(data, function (key, val) {
            if(val.nome == str) {             
              $.each(val.cidades, function (key_city, val_city) {
                options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
              });             
            }
          });
          $("#cidades").html(options_cidades);
          
        }).change();    
      
      });
    
    });

    </script>

<?php
require_once("rodape.php");
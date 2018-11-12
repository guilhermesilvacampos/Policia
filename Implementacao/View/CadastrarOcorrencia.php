<?php
/**
 * Created by PhpStorm.
 * User: Gui
 * Date: 01/10/2018
 * Time: 17:08
 */

require_once ("cabecalho.php");
require_once("padrao.php");


require_once("../Model/delegado.php");
require_once("../DAO/delegadoDAO.php");
$tamanho = 1;



$delegadoDAO = new DelegadoDAO($conexao);


$listaDelegados = $delegadoDAO->listaDelegados();

?>


 <link href="css/cadastrarOcorrencia.css" rel="stylesheet">








    <div class="conteudo">

    <div>
        <legend><h1 class="col-md-offset-1">Cadastrar Ocorrência</h1></legend>
    </div>

    <form action="../Controller/adicionaOcorrencia.php" method="post">

        <div class="inputs">

        	

			<div class="form-group">
    <label for="estados">Estado</label>
    <select  id="estados" name="estadoOcorrencia" class="form-control form-control-lg" required>
  <option value=" "></option>
</select>
  </div>

<div class="form-group">
    <label for="cidades">Cidade</label>
    <select  id="cidades" name="cidadeOcorrencia" class="form-control form-control-lg" required>
  
</select>
  </div>

  <div class="form-group">
    <table>
      <tr>
        <td class="col-md-2">
<div class="form-group">
          <label for="rua">Rua</label>
    <input type="text" id="rua" name="ruaOcorrencia" class="form-control form-control-lg" placeholder="Digite a rua em que ocorreu o crime" required>
</div>
     </td>
    <td>
<div class="form-group">
      <label for="numero">Número</label>
    <input type="number" id="numero" name="numeroCasaOcorrencia" class="form-control form-control-lg"  required> 
</div>
  </td>

      </tr>
    </table>

  </div>

<div class="form-group">
          <label for="bairro">Bairro</label>
    <input type="text" id="bairro" name="bairroOcorrencia" class="form-control form-control-lg" placeholder="Digite o bairro onde ocorreu o crime" required>
</div>

<div class="form-group">
    <label for="data">Data do Crime</label>
    <input type="date" id="data" name="dataOcorrencia" class="form-control form-control-lg"  >
  </div>

  <div class="form-group">
    <label for="hora">Hora do Crime</label>
    <input type="time" id="hora" name="horaOcorrencia" class="form-control form-control-lg"  >
  </div>
  
<div class="form-group">
    <label for="delegado">Delegado Responsável</label>
    <select  id="delegado" name="idDelegado" class="form-control form-control-lg" required>
      <?php
      foreach ($listaDelegados as $delegado) {
        ?>
        
 <option value="<?= $delegado->idDelegado?>"><?= $delegado->nomeDelegado?></option>
        <?php
      }
      ?>
 
</select>
  </div>

  <div class="form-group">
    <label for="equipe">Equipe Envolvida</label>
    <select  id="equipe" name="idEquipe" class="form-control form-control-lg" required>
  <option value="1">Equipe Rocket</option>
</select>
  </div>

  <div>
        <input type="checkbox" name="segredoOcorrencia" id="segredo" value="true" />
        <label for="segredo">Segredo de Justiça</label>
    </div>

    <div class="form-group">
    <label for="status">Status</label>
    <select  id="status" name="statusOcorrencia" class="form-control form-control-lg" required>
  <option>Default select</option>
</select>
  </div>

  








  <div class="form-group">
  	
    <legend id="legend1"> <h2><b>Pessoas Envolvidas</b></h2></legend>
    <br>

    <input type="button" id="add_field" value="Inserir Pessoas Envolvidas" class="btn btn-primary btn btn-lg">


<div id="listas" class="form-group">
   <br>
</div>




  </div>


<button type="submit" id="b1" class="btn btn-success btn-lg">Cadastrar</button>
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




    




    $(document).ready(function() {
        var campos_max          = 10;   //max de 10 campos
        var x = 1; // campos iniciais
        
        
        $('#add_field').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < campos_max) {

                        $('#listas').append('<div>\
      <label for="pessoa">Pessoa Envolvida</label>\
    <input type="number" id="pessoa"  name="pessoasEnvolvidasArray[]" class="form-control form-control-lg" \
    placeholder="Digite o CPF do envolvido" required>\
    <a href="#" class="remover_campo">Remover</a>\
    </div>');
                       
                        x++;
                         

                }
        });
 
        // Remover o div anterior
        $('#listas').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        });
});
    
  </script>



<?php
require_once ("rodape.php");
?>

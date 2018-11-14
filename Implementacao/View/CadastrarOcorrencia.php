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
require_once("../Model/equipe.php");
require_once("../DAO/equipeDAO.php");

$tamanho = 1;



$delegadoDAO = new DelegadoDAO($conexao);
$listaDelegados = $delegadoDAO->listaDelegados();

$equipeDAO = new EquipeDAO($conexao);
$listaEquipe = $equipeDAO->listaEquipe();

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
        <td class="col-md-10">
<div class="form-group">
          <label for="rua">Rua</label>
    <input type="text" id="rua" name="ruaOcorrencia" class="form-control form-control-lg" placeholder="Digite a rua em que ocorreu o crime" required>
</div>
     </td>
    <td>
<div class="form-group">
      <label for="numero">Número</label>
    <input type="number" onkeyup="mascara(this, mnum);" id="numero" name="numeroCasaOcorrencia" class="form-control form-control-lg"  required> 
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
    <input type="date" id="data" placeholder="ano-mes-dia"  name="dataOcorrencia" class="form-control form-control-lg"  >
  </div>

  <div class="form-group">
    <label for="hora">Hora do Crime</label>
    <input type="time" id="hora" placeholder="hora:minuto:segundos" name="horaOcorrencia" class="form-control form-control-lg"  >
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

 <div>
        <input type="checkbox" name="segredoOcorrencia" id="segredo" value="true" />
        <label for="segredo">Segredo de Justiça</label>
    </div>


  <legend id="legend1"> <h2><b>Policiais Envolvidos</b></h2></legend>
    <br>

<input type="button" id="add_field2" value="Inserir Policiais Envolvidos" class="btn btn-primary btn btn-lg">

  <div id="listas1">
    
  </div>


 
    <div class="form-group">
    
    <input  id="status" name="statusOcorrencia" value="ativa" class=" hidden form-control form-control-lg" required> </input>
  </div>

  








  <div class="form-group">
  	
    <legend id="legend1"> <h2><b>Pessoas Envolvidas</b></h2></legend>
    <br>

    <input type="button" id="add_field" value="Inserir Pessoas Envolvidas" class="btn btn-primary btn btn-lg">



<div id="listas2" class="form-group">
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

                        $('#listas2').append('<div>\
      <label for="pessoa">Pessoa Envolvida</label>\
    <input type="number" id="pessoa"  name="pessoasEnvolvidasArray[]" class="form-control form-control-lg" \
    placeholder="Digite o CPF do envolvido" required>\
    <a href="#" class="remover_campo">Remover</a>\
    </div>');
                       
                        x++;
                         

                }
        });

 
        // Remover o div anterior
        $('#listas2').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        });
});
    
 $(document).ready(function() {
        var campos_max          = 10;   //max de 10 campos
        var x = 1; // campos iniciais
        
        
        $('#add_field2').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < campos_max) {

                        $('#listas1').append(' <div class="form-group">\
    <label for="equipe">Equipe Envolvida</label>\
    <select  id="equipe" name="policiaisEnvolvidosArray[]" class="form-control form-control-lg" required>\
  <?php
      foreach ($listaEquipe as $equipe) {
        ?>\
        \
 <option value="<?= $equipe->idEquipe?>"><?= $equipe->nomeEquipe?></option>\
        <?php
      }
      ?>\
</select>\
<a href="#" class="remover_campo">Remover</a>\
  </div>');
                       
                        x++;
                         

                }
        });
 
        // Remover o div anterior
        $('#listas1').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        });
});



function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mcep(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2")         //Esse é tão fácil que não merece explicações
    return v
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}
function mcpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}
function mdata(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");

    v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
    return v;
}
function mtempo(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{1})(\d{2})(\d{2})/,"$1:$2.$3");
    return v;
}
function mhora(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1h$2");
    return v;
}
function mrg(v){
    v=v.replace(/\D/g,"");                                      //Remove tudo o que não é dígito
        v=v.replace(/(\d)(\d{7})$/,"$1.$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
        v=v.replace(/(\d)(\d{4})$/,"$1.$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
        v=v.replace(/(\d)(\d)$/,"$1-$2");               //Coloca o - antes do último dígito
    return v;
}
function mnum(v){
    v=v.replace(/\D/g,"");                                      //Remove tudo o que não é dígito
    return v;
}
function mvalor(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares

    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}





  </script>



<?php
require_once ("rodape.php");
?>

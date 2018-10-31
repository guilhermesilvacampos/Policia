<?php
require_once("cabecalho.php");
require_once("padrao.php");

?>
<link href="css/cadastrarEvidencia.css" rel="stylesheet">

	<div class="conteudo">

<form>
<div class="inputs">
  <div class="form-group">


    <label for="NumeroDaOcorrencia">Número da Ocorrência</label>
    <input type="text" id="NumeroDaOcorrencia" class="form-control"  placeholder="Digite o Número da Ocorrência">
    
  </div>
  

  

<div class="form-group">
    <label for="armaDoCrime" >Arma do Crime </label>
    <select  id="armaDoCrime" class="form-control" onchange="optionCheck()">
      <option value="">Selecione Uma Opção Abaixo</option>
  <option value="arma">ARMA</option>
  <option value="celular">CELULAR</option>
  <option value="objeto">OBJETO</option>
  <option value="substancia">SUBSTÂNCIA</option>
  <option value="veiculo">VEICULO</option>
</select>
  </div>

<div id="DivArma" class="hidden" >

<div class="form-group">


    <label for="NumeroDeSerie">Número de Série</label>
    <input type="integer" id="NumeroDeSerie" class="form-control"  placeholder="Digite o Número de Série da Arma">
    
  </div>

  <div class="form-group">


    <label for="NumeroDoCalibre">Calibre</label>
    <input type="integer" id="NumeroDoCalibre" class="form-control"  placeholder="Digite o Número do Calibre Da Arma">
    
  </div>

  <div class="form-group">


    <label for="Fabricante">Fabricante</label>
    <input type="text" id="Fabricante" class="form-control"  placeholder="Digite o Nome do Fabricante">
    
  </div>

  <div class="form-group">


    <label for="Modelo">Modelo</label>
    <input type="text" id="Modelo" class="form-control"  placeholder="Digite o Modelo da Arma">
    
  </div>

</div>


<div id="DivCelular" class="hidden">

<div class="form-group">


    <label for="NumeroDoIMEI">Número do IMEI</label>
    <input type="integer" id="NumeroDoIMEI" class="form-control"  placeholder="Digite o Número do IMEI do Celular">
    
  </div>

  <div class="form-group">


    <label for="NumeroDoCelular">Número do Celular</label>
    <input type="integer" id="NumeroDoCelular" class="form-control"  placeholder="Digite o Número do Celular">
    
  </div>
</div>

<div id="DivObjeto" class="hidden">
Objeto
</div>

<div id="DivSubstancia" class="hidden">
Substancia
</div>

<div id="DivVeiculo" class="hidden">
Veiculo
</div>



<div class="form-group">
    <label for="objeto">Objeto Subtraído</label>
    <select  id="objeto" class="form-control">
  <option>Default select</option>
</select>
  </div>

  <div class="form-group">
    <label for="providencia">Providência</label>
    <select  id="providencia" class="form-control">
  <option>Default select</option>
</select>
  </div>
  
  <div class="form-group">


    <label for="NumeroDaOcorrencia">CPF Do Cidadão</label>
    <input type="integer" id="NumeroDaOcorrencia" class="form-control"  placeholder="Digite o CPF do Cidadão">
    
  </div>


  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>

</div>



<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("armaDoCrime").value;
        if(option == "arma"){

          var elementArma = document.getElementById("DivArma");
    elementArma.classList.remove("hidden");

          var elementCelular = document.getElementById("DivCelular");

          elementCelular.classList.add("hidden");

          var elementObjeto = document.getElementById("DivObjeto");

          elementObjeto.classList.add("hidden");

          var elementSubstancia = document.getElementById("DivSubstancia");

          elementSubstancia.classList.add("hidden");

          var elementVeiculo = document.getElementById("DivVeiculo");

          elementVeiculo.classList.add("hidden");


            
        }
        if(option == "celular"){
            var element = document.getElementById("DivCelular");
    element.classList.remove("hidden");

var elementObjeto = document.getElementById("DivObjeto");

          elementObjeto.classList.add("hidden");

          var elementSubstancia = document.getElementById("DivSubstancia");

          elementSubstancia.classList.add("hidden");

          var elementVeiculo = document.getElementById("DivVeiculo");

          elementVeiculo.classList.add("hidden");

          var elementArma = document.getElementById("DivArma");

          elementArma.classList.add("hidden");


        }
        if(option == "objeto"){
            var element = document.getElementById("DivObjeto");
    element.classList.remove("hidden");

  var elementSubstancia = document.getElementById("DivSubstancia");

          elementSubstancia.classList.add("hidden");

          var elementVeiculo = document.getElementById("DivVeiculo");

          elementVeiculo.classList.add("hidden");

          var elementArma = document.getElementById("DivArma");

          elementArma.classList.add("hidden");

          var elementCelular = document.getElementById("DivCelular");

          elementCelular.classList.add("hidden");


        }
        if(option == "substancia"){
            var element = document.getElementById("DivSubstancia");
    element.classList.remove("hidden");

var elementVeiculo = document.getElementById("DivVeiculo");

          elementVeiculo.classList.add("hidden");

          var elementArma = document.getElementById("DivArma");

          elementArma.classList.add("hidden");

          var elementCelular = document.getElementById("DivCelular");

          elementCelular.classList.add("hidden");

          var elementObjeto = document.getElementById("DivObjeto");

          elementObjeto.classList.add("hidden");


        }
        if(option == "veiculo"){
          var element = document.getElementById("DivVeiculo");
    element.classList.remove("hidden");


          var elementArma = document.getElementById("DivArma");

          elementArma.classList.add("hidden");

          var elementCelular = document.getElementById("DivCelular");

          elementCelular.classList.add("hidden");

          var elementObjeto = document.getElementById("DivObjeto");

          elementObjeto.classList.add("hidden");

          var elementSubstancia = document.getElementById("DivSubstancia");

          elementSubstancia.classList.add("hidden");


        }
        
    }
</script>

<?php
require_once("rodape.php");
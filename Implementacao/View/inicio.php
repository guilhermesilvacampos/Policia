<?php
require_once("cabecalho.php");


?>
<link href="css/inicio.css" rel="stylesheet">


<div class="topnav" id="myTopnav">
  <table>
    <tr>
      <td><img src="image/avatar.jpg" alt="Avatar" class="avatar"> </td>
      <td><b><p class="h">GOPolice </p></b></td>
    </tr>
  </table>
  
  
  

  
</div>
<div class="conteudo">
	<div class="row justify-content-around">
    
      
    

    <div class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"> <i class="far fa-user"></i>Cidadão</h1>
    </div>
    <div class="flip-card-back">
      <a type="button" href="cadastrarCidadao.php" class="btn btn-secondary btn-lg btn-block"><h1>Cadastrar </h1></a>
      <a type="button" href="visualizarCidadao.php" class="btn btn-secondary btn-lg btn-block"><h1>Visualizar </h1></a>
    </div>
  </div>
</div>


<div class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"> <i class="fas fa-exclamation-triangle"></i>Ocorrência</h1>
    </div>
    <div class="flip-card-back">
      <a type="button" href="cadastrarOcorrencia.php" class="btn btn-secondary btn-lg btn-block"><h1>Cadastrar </h1></a>
      <a type="button" href="visualizarOcorrencia.php" class="btn btn-secondary btn-lg btn-block"><h1>Visualizar </h1></a>
    </div>
  </div>
</div>

<div  class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-secret"></i>Evidência</h1>
    </div>
    <div class="flip-card-back">
      <a id="button1" type="button" class="btn btn-secondary btn-lg btn-block"><h1>Visualizar </h1></a>
    </div>
  </div>
</div>


<div class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"><i class="fas fa-id-card-alt"></i>Equipe</h1>
    </div>
    <div class="flip-card-back">
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>Cadastrar </h1></a>
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>Visualizar </h1></a>
    </div>
  </div>
</div>

<div class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"><i class="fas fa-map-marker-alt"></i>Delegacia</h1>
    </div>
    <div class="flip-card-back">
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>Cadastrar </h1></a>
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>Visualizar </h1></a>
    </div>
  </div>
</div>

<div class="flip-card col-4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 id="h11" class="btn btn-secondary btn-lg btn-block"><i class="far fa-file-alt"></i>Relatórios</h1>
    </div>
    <div class="flip-card-back">
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>R1 </h1></a>
      <a type="button" class="btn btn-secondary btn-lg btn-block"><h1>R2 </h1></a>
    </div>
  </div>
</div>

<div id="card" class="flip-card col-4 ">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <p id="h12" class="btn btn-secondary btn-lg btn-block"> <i class="fas fa-balance-scale"></i>Mandado de Prisão</p>
    </div>
    <div class="flip-card-back">
      <a id="button1" type="button" class="btn btn-secondary btn-lg btn-block"><h1>Expedir</h1></a>
      
    </div>
  </div>
</div>

</div>


</div>
</div>
 

<?php
require_once("rodape.php");
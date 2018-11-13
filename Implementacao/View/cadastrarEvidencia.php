<?php
require_once("cabecalho.php");
require_once("padrao.php");

require_once("../Model/evidencia.php");
require_once("../DAO/evidenciaDAO.php");

if(isset($_SESSION['idOcorrencia'])){
    $idOcorrencia = $_SESSION['idOcorrencia'];
}

$idOcorrencia = 10;

?>
    <link href="css/cadastrarEvidencia.css" rel="stylesheet">

    <div class="conteudo">

    <div>
        <legend><h1 class="col-md-offset-1">Cadastrar Evidência</h1></legend>
    </div>

    <form action="../Controller/adicionaEvidencia.php" method="post">

        <div class="inputs">
            <div class="form-group ">

<?= "id Ocorrencia: ".$idOcorrencia ?>

                
                <input type="number" id="NumeroDaOcorrencia" name="idOcorrencia" value="<?=$idOcorrencia?>" class="hidden form-control form-control-lg" >

            </div>


            <legend id="legend"></legend>

            <div class="form-group">
                    <fieldset id="evidencia" >
    <legend><b>Marque as Evidências do Crime</b></legend>

    <div>
        <input type="checkbox" id="arma" onchange="option();" name="tipoEvidencia" value="arma" />
        <label for="arma">ARMA</label>
    </div>

    <div>
        <input type="checkbox" id="celular" onchange="option();"
               name="tipoEvidencia" value="celular" />
        <label for="celular">Celular</label>
    </div>

    <div>
        <input type="checkbox" id="objeto" onchange="option();"
               name="tipoEvidencia" value="objeto" />
        <label for="objeto">OBJETO</label>
    </div>

    <div>
        <input type="checkbox" id="substancia" onchange="option();"
               name="tipoEvidencia" value="substancia" />
        <label for="substancia">SUBSTANCIA</label>

    </div>

    <div>
        <input type="checkbox" id="veiculo" onchange="option();"
               name="tipoEvidencia" value="veiculo" />
        <label for="veiculo">VEICULO</label>
    </div>

</fieldset>


            </div>

            <div id="DivArma" class="hidden">
                <legend id="legend1"><h2>ARMA</h2></legend>

                <div class="form-group">


                    <label for="NumeroDeSerie">Número de Série</label>
                    <input type="number" id="NumeroDeSerie" name="numeroDeSerie" class="form-control form-control-lg"
                           placeholder="Digite o Número de Série da Arma" >

                </div>

                <div class="form-group">


                    <label for="NumeroDoCalibre">Calibre</label>
                    <input type="number" id="NumeroDoCalibre" name="numeroDoCalibre" 
                            class="form-control form-control-lg"
                           placeholder="Digite o Número do Calibre Da Arma" >

                </div>

                <div class="form-group">


                    <label for="FabricanteArma">Fabricante</label>
                    <input type="text" id="FabricanteArma" name="fabricanteArma" class="form-control form-control-lg"
                           placeholder="Digite o Nome do Fabricante" >

                </div>

                <div class="form-group">


                    <label for="ModeloArma">Modelo</label>
                    <input type="text" id="ModeloArma" name="modeloArma" class="form-control form-control-lg"
                           placeholder="Digite o Modelo da Arma" >

                </div>

            </div>


            <div id="DivCelular" class="hidden">
                <legend id="legend1"> <h2>CELULAR</h2></legend>

                <div class="form-group">


                    <label for="NumeroDoIMEI">Número do IMEI</label>
                    <input type="number" id="NumeroDoIMEI" name="numeroDoIMEI" class="form-control form-control-lg"
                           placeholder="Digite o Número do IMEI do Celular" >

                </div>

                <div class="form-group">


                    <label for="NumeroDoCelular">Número do Celular</label>
                    <input type="number" id="NumeroDoCelular" name="numeroDoCelular" 
                            class="form-control form-control-lg"
                           placeholder="Digite o Número do Celular" >

                </div>

                <div class="form-group">


                    <label for="fabricanteCelular">Fabricante do Celular</label>
                    <input type="text" id="fabricanteCelular" name="fabricanteCelular" 
                            class="form-control form-control-lg"
                           placeholder="Digite o Nome do Fabricante do Celular" >

                </div>

                <div class="form-group">


                    <label for="ModeloCelular">Modelo do Celular</label>
                    <input type="text" id="ModeloCelular" name="modeloCelular" class="form-control form-control-lg"
                           placeholder="Digite o Modelo do Celular" >

                </div>

                <div class="form-group">


                    <label for="CpfProprietario">CPF Do Proprietário</label>
                    <input type="integer" id="CpfProprietario" name="cpfProprietario" 
                            class="form-control form-control-lg"
                           placeholder="Digite o CPF do Proprietário" >

                </div>
            </div>

            <div id="DivObjeto" class="hidden">
                <legend id="legend1"> <h2>OBJETO</h2></legend>
                <div class="form-group">


                    <label for="nomeObjeto">Nome do Objeto</label>
                    <input type="text" id="nomeObjeto" name="nomeObjeto"
                             class="form-control form-control-lg"
                           placeholder="Digite o Nome do Objeto" >

                </div>

                <div class="form-group">


                    <label for="descricaoObjeto">Descrição do Objeto</label>
                    <textarea type="text" id="descricaoObjeto" name="descricaoObjeto"
                             class="form-control form-control-lg"
                           placeholder="Descreva o Objeto" > </textarea>

                </div>


            </div>

            <div id="DivSubstancia" class="hidden">
                <legend id="legend1"><h2>SUBSTÂNCIA</h2></legend>

                <div class="form-group">
                    <label for="tipoSubstancia">Tipo de Substância</label>
                    <input type="text" id="tipoSubstancia" name="tipoSubstancia"
                             class="form-control form-control-lg"
                           placeholder="Digite o Tipo de Substancia" >
                </div>

                <div class="form-group col-md-offset-1">
                    <table>
                        <tr>
                            <td class="col-md-auto">

                                <label for="pesoSubstancia">Peso da Substância</label>
                                <input type="number" id="pesoSubstancia" name="pesoSubstancia"
                                         class="form-control form-control-lg"
                                       placeholder="Digite o Peso da Substancia" >


                            </td>

                            <td class="col-md-auto">

                                <label for="unidadeSubstancia">Unidade de Medida</label>
                                <select id="unidadeSubstancia" name="unidadeSubstancia"
                                         class="form-control form-control-lg" >
                                    <option value="">Selecione Uma Opção Abaixo</option>
                                    <option value="Mg">MG</option>
                                    <option value="Kg">KG</option>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <label for="embalagem">Embalagem</label>
                    <select id="embalagem" name="embalagem"
                     class="form-control form-control-lg" >
                        <option value="">Selecione Uma Opção Abaixo</option>
                        <option value="pacote">PACOTE</option>
                        <option value="capsula">CÁPSULA</option>
                        <option value="frasco">FRASCO</option>
                    </select>

                </div>
            </div>


            <div id="DivVeiculo" class="hidden">
                <legend id="legend1"> <h2>VEÍCULO</h2></legend>

                <div class="form-group">
                    <label for="chassi">Chassi</label>
                    <input type="number" id="chassi" name="chassi" 
                            class="form-control form-control-lg"
                           placeholder="Digite o Chassi do Veículo" >
                </div>

                <div class="form-group">
                    <label for="placa">Placa</label>
                    <input type="text" id="placa" name="placa" class="form-control form-control-lg"
                           placeholder="Digite a Placa do Veículo" >
                </div>

                <div class="form-group">
                    <?php $years = range(1900, strftime("%Y", time()) + 2); ?>
                    <label for="anoFabricacao">Ano de Fabricação</label>
                    <select id="anoFabricacao" name="anoFabricacao" 
                    class="form-control form-control-lg" >
                        <?php foreach ($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>


                </div>

                <div class="form-group">
                    <?php $years = range(1900, strftime("%Y", time()) + 2); ?>
                    <label for="anoModelo">Ano do Modelo</label>
                    <select id="anoModelo" name="anoModelo" class="form-control form-control-lg">
                        <?php foreach ($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>


                </div>

                <div class="form-group">


                    <label for="fabricanteVeiculo">Fabricante do Veículo</label>
                    <input type="text" id="fabricanteVeiculo" name="fabricanteVeiculo" class="form-control form-control-lg"
                           placeholder="Digite o Nome do Fabricante do Veículo" >

                </div>

                <div class="form-group">


                    <label for="ModeloVeiculo">Modelo do Veículo</label>
                    <input type="text" id="ModeloVeiculo" name="modeloVeiculo" class="form-control form-control-lg"
                           placeholder="Digite o Modelo do Veículo" >

                </div>

                <div class="form-group">


                    <label for="CorVeiculo">Cor do Veículo</label>
                    <input type="text" id="CorVeiculo" name="corVeiculo" class="form-control form-control-lg"
                           placeholder="Digite a Cor do Veículo" >

                </div>


            </div>

            <legend id="legend"></legend>
            <div class="form-group">


                    <label for="armaDoCrime">Arma do Crime</label>
                    <input type="text" id="armaDoCrime" name="armaDoCrime" class="form-control form-control-lg"
                           placeholder="Digite o Nome da Arma do Crime" required>

                </div>

            <div class="form-group">
                <label for="objetoSubtarido">Objeto Subtraído</label>
                <select id="objetoSubtarido" name="objetoSubtarido" class="form-control form-control-lg" required>
                    <option value="">Selecione Uma Opção Abaixo</option>
                    <option value="1">Default select</option>
                </select>
            </div>

            <div class="form-group">
                <label for="providencia">Providência</label>
                <select id="providencia" name="providencia" class="form-control form-control-lg" required>
                    <option value="">Selecione Uma Opção Abaixo</option>
                    <option value="1">Default select</option>
                </select>
            </div>

            <div class="form-group">


                <label for="cpfCidadao">CPF Do Cidadão</label>
                <input type="number" id="cpfCidadao" name="cpfCidadao" class="form-control form-control-lg"
                       placeholder="Digite o CPF do Cidadão" required>

            </div>


            <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>

        </div>
    </form>


    <script type="text/javascript">

function option(){

    if (document.getElementById("arma").checked ==true) {
                var elementArma = document.getElementById("DivArma");
                elementArma.classList.remove("hidden");
            } else {
                var elementArma = document.getElementById("DivArma");

                elementArma.classList.add("hidden");
                
            }


            if (document.getElementById("celular").checked ==true) {
                var element = document.getElementById("DivCelular");
                element.classList.remove("hidden");
            } else {
                var elementCelular = document.getElementById("DivCelular");

                elementCelular.classList.add("hidden");
                
            }

             if (document.getElementById("objeto").checked ==true) {
                var element = document.getElementById("DivObjeto");
                element.classList.remove("hidden");
            } else {
               var elementObjeto = document.getElementById("DivObjeto");

                elementObjeto.classList.add("hidden");
                
            }


if (document.getElementById("substancia").checked ==true) {
                var element = document.getElementById("DivSubstancia");
                element.classList.remove("hidden");
            } else {
                var elementSubstancia = document.getElementById("DivSubstancia");

                elementSubstancia.classList.add("hidden");
                
            }

             if (document.getElementById("veiculo").checked ==true) {
                var element = document.getElementById("DivVeiculo");
                element.classList.remove("hidden");
            } else {
               var elementVeiculo = document.getElementById("DivVeiculo");

                elementVeiculo.classList.add("hidden");
                
            }

    
}





        
    </script>

<?php
require_once("rodape.php");
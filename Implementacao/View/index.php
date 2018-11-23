<?php
/**
 * Created by PhpStorm.
 * User: Gui
 * Date: 04/10/2018
 * Time: 17:59
 */

require_once("mostraAlerta.php");
require_once("logica-usuario.php");

mostraAlerta("danger");
?>












   







<?php if(!usuarioEstaLogado()) {

    ?>

<link href=css/bootstrap.css rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    


    <form class="modal-content animate" action="login.php" method="post">
        <div class="imgcontainer">
            
            <img src="image/avatar.jpg" alt="Avatar" class="avatar">
        </div>

        
            <div class="conteudo">
                <div class="inputs">
            <div class="form-horizontal">
                <label for="uname"><b>Login</b></label>
                <input id="login" type="text" placeholder="Escreva seu email de login" name="email" required>
            </div>
            <div class="form-horizontal">
                <label for="psw"><b>Senha</b></label>
                <input id="password" type="password" placeholder="Escreva sua senha" name="senha" required>
            </div>
                </div>
            <div class="cont1">
                <button type="submit">Login</button>
            </div>
            </div>

        

        
    </form>

<?php }?>

<?php
require_once("rodape.php");

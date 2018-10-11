<?php
/**
 * Created by PhpStorm.
 * User: Gui
 * Date: 04/10/2018
 * Time: 17:59
 */


?>
    <link href="css/login.css" rel="stylesheet">


    <form class="modal-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="image/avatar.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container ">
            <div class="form-horizontal">
                <label for="uname"><b>Login</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="form-horizontal">
                <label for="psw"><b>Senha</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
            <div class="cont1">
                <button type="submit">Login</button>
            </div>

        </div>

        <div class="container cont2" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>


<?php
require_once("rodape.php");

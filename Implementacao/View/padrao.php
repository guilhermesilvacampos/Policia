<?php
/**
 * Created by PhpStorm.
 * User: Gui
 * Date: 01/10/2018
 * Time: 17:21
 */
require_once("cabecalho.php");
?>




    <div class="sidenav">


        <a  href="#about"><i class="fas fa-home"></i>Início</a>
        <a href="#services"> <i class="far fa-question-circle"></i>Ajuda</a>
        <button class="dropdown-btn"><i class="far fa-user"></i>Cidadão
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-exclamation-triangle"></i>Ocorrência
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn"><i class="fas fa-user-secret"></i>Evidência
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-id-card-alt"></i>Funcionários
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-map-marker-alt"></i>Delegacia
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <button class="dropdown-btn"> <i class="far fa-file-alt"></i>Relatórios
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <a href="#about"><i class="fas fa-balance-scale"></i>Expedir Mandado de Prisão</a>

    </div>

    <div class="main">
        <h2>Sidebar Dropdown</h2>
        <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
        <p>This sidebar is of full height (100%) and always shown.</p>
        <p>Some random text..</p>
    </div>



    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

<?php
require_once("rodape.php");


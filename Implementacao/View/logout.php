<?php require_once("logica-usuario.php");

unset ($_SESSION['permissao']);
logout();
session_start();
$_SESSION["danger"] = "Usuario Deslogado com sucesso!";

header("Location:index.php");
die();
<?php

session_start();
require_once("../includes/config.php");
require_once("../includes/funcoes.php");

$template = html_template_logado(TPL_INDEX);
echo $template;
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['pswd']) == true)){
    // Se não houver email e senha, volte para fazer o login.
    header('Location: login.php');
}
?>
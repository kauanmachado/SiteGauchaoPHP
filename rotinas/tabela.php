<?php

session_start();
require_once("../includes/funcoes.php");
require_once("../includes/config.php");
require_once("../includes/bd.php");
require_once("../includes/times.php");

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['pswd']) == true)) {
    // Se não houver email e senha, volte para fazer o login.
    header('Location: login.php');
}
echo html_conteudo_logado(html_tabela_times_pontos());



?>
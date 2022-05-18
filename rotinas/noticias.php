<?php

session_start();
require_once("../includes/config.php");
require_once("../includes/funcoes.php");
require_once("../includes/newsletter.php");
require_once("../includes/bd.php");


if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['pswd']) == true)) {
    // Se não houver email e senha, volte para fazer o login.
    header('Location: login.php');
}
// Inserindo no banco
if (isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $time  = $_POST['times'];
    $insert = insert_newsletter($email, $time);
}
// Atualizando o banco
if(isset($_POST['atualizar'])){
    $email = $_SESSION['email'];
    $time  = $_POST['times'];
    $insert = update_newsletter($email, $time);
}
// Deletando no banco
if(isset($_POST['interromper'])){
    $email  = $_SESSION['email'];
    $delete = delete_newsletter($email);
}

$email = $_SESSION['email'];
$times = select_newsletter($email);
$time = "";
if (count($times)) {
    $time = $times[0]['nm_time'];
}
$template = html_conteudo_logado(html_newsletter($time));
echo $template;

?>
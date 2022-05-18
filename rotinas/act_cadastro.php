<?php

require_once("../includes/bd.php");
require_once("../includes/usuario.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pswd'];

$verificacao = verifica_email($email);

if(count($verificacao) > 0){
    echo "Email já cadastrado!";
    die();
}

inserir_usuario($nome, $email, $senha);
header('Location: login.php');

?>
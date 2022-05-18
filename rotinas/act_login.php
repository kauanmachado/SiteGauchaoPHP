<?php

if(isset($_POST['acao']) && !empty ($_POST['email']) && !empty ($_POST['pswd'])){
    include_once("../includes/bd.php");
    include_once("../includes/usuario.php");
    $email = $_POST['email'];
    $senha = $_POST['pswd'];
    $verificacao = verifica_email_senha($email, $senha);
    // Se o usuario existir, direciona para o login
    if(count($verificacao) > 0){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['pswd'] = $senha;
        header('Location: index_.php');
    }else{
        echo 'Email/Senha incorretos';
    }
}if(isset($_POST['acao']) && empty ($_POST['email']) | empty ($_POST['pswd'])){
    echo 'Campos não preenchidos';
}
?>
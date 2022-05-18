<?php

require_once("../includes/config.php");
require_once("../includes/bd.php");
require_once("../includes/funcoes.php");

function html_form_login(){
    $html  = "<form id=\"form\" action=\"act_login.php\" method=\"post\">\n";
    $html  .=  "<label for=\"text\">Para entrar no site, faça o login:</label><br><br>";
    $html  .=  "<label for=\"email\">Email</label><br>";
    $html  .=  "<input type=\"email\" name=\"email\" id=\"email\"><br>";
    $html  .=  "<label for=\"pswd\">Senha</label><br>";
    $html  .=  "<input type=\"password\" name=\"pswd\" id=\"pswd\"><br><br>";
    $html  .=  "<input id=\"enviar\" type=\"submit\" name=\"acao\" value=\"Enviar\"><br><br>";
    $html  .=  "<h5>Ainda não tem cadastro clique no link abaixo</h5>";
    $html  .=  "<h5><a id=\"link\" href=\"cadastro.php\">Cadastre-se</a></h5>";
    return $html;
}
echo html_conteudo(html_form_login());
?>
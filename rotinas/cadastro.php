<?php

require_once("../includes/config.php");
require_once("../includes/bd.php");
require_once("../includes/funcoes.php");
function html_form_cadastro(){
    $html  = "<form id=\"form\" action=\"act_cadastro.php\" method=\"post\">\n";
    $html  .=  "<label for=\"text\">Faça o cadastro:</label><br><br>";
    $html  .=  "<label for=\"nome\">Nome</label><br>";
    $html  .=  "<input type=\"text\" name=\"nome\" id=\"nome\"><br>";
    $html  .=  "<label for=\"email\">Email</label><br>";
    $html  .=  "<input type=\"email\" name=\"email\" id=\"email\"><br>";
    $html  .=  "<label for=\"pswd\">Senha</label><br>";
    $html  .=  "<input type=\"password\" name=\"pswd\" id=\"pswd\"><br><br>";
    $html  .=  "<input id=\"enviar\" type=\"submit\" name=\"acao\" value=\"Enviar\"><br><br>";
    return $html;
}
echo html_conteudo(html_form_cadastro());
?>
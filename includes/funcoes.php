<?php

function html_template($tpl){
    $html = file_get_contents(TPL_HOME);
    $html_parte = file_get_contents($tpl);
    $html = str_replace("<!--conteudo-site-->", $html_parte, $html); 
    return $html;
}
function html_template_logado($tpl){
    $html = file_get_contents(TPL_HOME_LOGADO);
    $html_parte = file_get_contents($tpl);
    $html = str_replace("<!--conteudo-site-->", $html_parte, $html); 
    return $html;
}
function html_conteudo_logado($conteudo){
    $html = file_get_contents(TPL_HOME_LOGADO);
    $html = str_replace("<!--conteudo-site-->", $conteudo, $html); 
    return $html;
}
function html_conteudo($conteudo){
    $html = file_get_contents(TPL_HOME);
    $html = str_replace("<!--conteudo-site-->", $conteudo, $html); 
    return $html;
}
?>

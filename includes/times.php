<?php

function select_times_pontos(){
    global $conn;

    try{
        $sql = "SELECT nm_time, pontos_time FROM tb_times A, tb_pontos B WHERE A.id_time = B.id_time ORDER BY pontos_time DESC";
        /*$stmt = $conn->prepare($sql);
        $stmt->execute();
        var_dump($stmt->fetchAll()); */
        return $conn->query($sql)->fetchAll(); 
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}

function html_tabela_times_pontos() {
	$html = "";
	$registros = select_times_pontos();

    // elemento anterior
	$html .= "<h1 id=\"text_tabela\"> Tabela de Classificação </h1> \n";
	$html .= "<table class=\"tabela_classificacao\">\n";
	$html .= "<TR>\n";
    $html .= "<TH>POSIÇÃO</TH>\n";
	$html .= "<TH>TIME</TH>\n";
	$html .= "<TH>PONTOS</TH>\n";
	$html .= "</TR>\n";
	foreach($registros as $pos => $registro) {
        $pos += 1;
		$html .= "<TR>\n";
        $html .= "<TD>{$pos}</TD>\n";
		$html .= "<TD>{$registro['nm_time']}</TD>\n";
		$html .= "<TD>{$registro['pontos_time']}</TD>\n";
		$html .= "</TR>\n";
	}
	$html .= "</table>\n";
	return $html;
}
?>
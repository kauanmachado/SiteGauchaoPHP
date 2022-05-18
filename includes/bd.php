<?php 

$bd_host = "localhost";
$sgbd = "mysql";
$base_de_dados = "gaucho";
$bd_usuario = "root";
$bd_senha = "";


try {
	$dsn_mysql = "mysql:host=".$bd_host.";dbname=".$base_de_dados;
	$conn = new PDO($dsn_mysql, $bd_usuario, $bd_senha);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die('ERROR: ' . $e->getMessage());
}

?>
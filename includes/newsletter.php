<?php

// Função para consultar nome dos times no banco
function select_times(){
    global $conn;

    try{
        $sql = "SELECT nm_time FROM tb_times";
        return $conn->query($sql)->fetchAll(); 
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}

// Criação de form com select dinâmico
function html_newsletter($time) {
	$html = "";
    $registros = select_times(); 

    // elemento anterior
	$html .= "<form id=\"form\" method=\"post\" action=\"noticias.php\">\n";
    // Insert
    $html .= "<h3 id=\"h3_noticias\"> Escolha um time favorito para acompanhar: </h3> \n";
    $html .= "<select id=\"select_noticias\" name=\"times\"> \n";
    $html .= "<option> Nenhum </option> \n";
    foreach($registros as $registro){
        $html .= "<option ";
        if($time == $registro['nm_time']){
            $html .= " selected ";
        }
        $html .= ">{$registro['nm_time']}</option>\n";
    }
    $html .= "</select>" . "<br><br>";
    $html .= "<input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Enviar\">\n";
    // Update
    $html .= "<h3 id=\"h3_noticias\"> Troque seu time favorito e clique aqui: </h3> \n";
    $html .= "<input id=\"submit\" type=\"submit\" name=\"atualizar\" value=\"Atualizar\">\n";
    // Delete
    $html .= "<h3 id=\"h3_noticias\"> Para parar de receber emails, clique aqui: </h3> \n";
    $html .= "<input id=\"submit\" type=\"submit\" name=\"interromper\" value=\"Interromper\">\n";
    $html .= "</form> \n";
	return $html;
}
// Função para executar os comandos sql
// Insert
function insert_newsletter($email, $time) {
    global $conn;

    try{
        $sql = "INSERT INTO tb_newsletter (email_usuario, nm_time) VALUES (:email, :nm_time)";
        $stmt = $conn->prepare($sql);
        // stmt = statement
        // bindParam = função para definir o valor/tipo de um parâmetro.
        // PDO (PHP Data Object) é um módulo do PHP montado sob um modelo orientado a objetos.
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':nm_time', $time, PDO::PARAM_STR);
        // Função execute() executa outras funções.
        $stmt->execute();
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}
//Update
function update_newsletter($email, $time) {
    global $conn;

    try{
        $sql = "UPDATE tb_newsletter SET nm_time = :nm_time WHERE email_usuario = :email";
        $stmt = $conn->prepare($sql);
        // stmt = statement
        // bindParam = função para definir o valor/tipo de um parâmetro.
        // PDO (PHP Data Object) é um módulo do PHP montado sob um modelo orientado a objetos.
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':nm_time', $time, PDO::PARAM_STR);
        // Função execute() executa outras funções.
        $stmt->execute();
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}
// Delete
function delete_newsletter($email) {
    global $conn;

    try{
        $sql = "DELETE FROM tb_newsletter WHERE email_usuario = :email";
        $stmt = $conn->prepare($sql);
        // stmt = statement
        // bindParam = função para definir o valor/tipo de um parâmetro.
        // PDO (PHP Data Object) é um módulo do PHP montado sob um modelo orientado a objetos.
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        // Função execute() executa outras funções.
        $stmt->execute();
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}
// Select
function select_newsletter($email)
{
    global $conn;

    try {
        $sql = "SELECT nm_time FROM tb_newsletter WHERE email_usuario = :email";
        $stmt = $conn->prepare($sql);
        // stmt = statement
        // bindParam = função para definir o valor/tipo de um parâmetro.
        // PDO (PHP Data Object) é um módulo do PHP montado sob um modelo orientado a objetos.
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        // Função execute() executa outras funções.
        $stmt->execute();
        return $stmt->fetchAll();
        
    } catch (PDOException $error) {
        die("ERROR: " . $error->getMessage());
    }
}
?>
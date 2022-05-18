<?php

// Função para inserir usuários no banco de dados;
function inserir_usuario($nome, $email, $senha) {
    global $conn;

    // Criptografia de senha com "sha256", ocupa 256 bits de memória local. 
    $hash_senha = hash("sha256", $senha);

    try{
        $sql = "INSERT INTO tb_usuario (nm_usuario, email_usuario, senha_usuario) VALUES (:nome, :email, :senha)";
        $stmt = $conn->prepare($sql);
        // stmt = statement
        // bindParam = função para definir o valor/tipo de um parâmetro.
        // PDO (PHP Data Object) é um módulo do PHP montado sob um modelo orientado a objetos.
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $hash_senha, PDO::PARAM_STR);
        // Função execute() executa outras funções.
        $stmt->execute();
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}

// Verifica durante o login
function verifica_email_senha($email, $senha){
    global $conn;

    $hash_senha = hash("sha256", $senha);
    
    try{
        $sql = "SELECT * FROM tb_usuario WHERE email_usuario = :email AND senha_usuario = :senha ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $hash_senha, PDO::PARAM_STR);
        $stmt->execute();
        // fetchAll() retorna um array com tudo o que foi pedido (id_usuario) de determinado email e senha de usuário.
        return $stmt->fetchAll();
    }
    catch(PDOException $error){
        die("ERROR: " . $error->getMessage());
    }
}

// Função para verificar se um email já é ou não existente
function verifica_email($email){
    global $conn;
    try {
        $sql = "SELECT * FROM tb_usuario WHERE email_usuario = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    catch (PDOException $error) {
        die("Dados Inválidos! \n" . $error->getMessage());
    }    
}   
?>
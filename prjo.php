<?php

session_start(); // INICIA A SESSÃO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $celular = $_POST["celular"];

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    $saldo = 3000000.00;

    $conexao = new mysqli('localhost', 'root', '', '', 3306);

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }
    $conexao->query("CREATE DATABASE IF NOT EXISTS motorsport");
    $conexao->select_db("motorsport");


    // Selecionar o banco
    $conexao->select_db('motorsport');
    $createTable = "
    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        cpf VARCHAR(14) NOT NULL,
        email VARCHAR(255) NOT NULL,
        senha VARCHAR(255) NOT NULL,
        celular VARCHAR(20),
        saldo DECIMAL(10,2) DEFAULT 0
    )
";

if (!$conexao->query($createTable)) {
    die('Erro ao criar tabela: ' . $conexao->error);
}


    $sql = "INSERT INTO usuarios (nome, cpf, email, senha, celular, saldo)
            VALUES ('$nome', '$cpf', '$email', '$senha_hash', '$celular', '$saldo')";

    if ($conexao->query($sql) === TRUE) {
              $id_usuario = $conexao->insert_id;

        // -----------------------------------------
        // SALVAR INFORMAÇÕES DO USUÁRIO NA SESSÃO
        // -----------------------------------------
        $_SESSION["usuario"] = [
            "id" => $id_usuario,
            "nome" => $nome,
            "email" => $email,
            "saldo" => $saldo
        ];

        // -----------------------------------------
        // REDIRECIONAR PARA ÁREA LOGADA
        // -----------------------------------------
        header("Location: prj.php");
        exit();
    } 
    else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    
    $conexao->close();
}
?>

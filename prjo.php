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

 $conexao = new mysqli('localhost', 'root', '', 'motorsport', 3307);

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
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

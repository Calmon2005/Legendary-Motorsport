<?php
session_start(); // INICIA A SESSÃO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST["prc"];
    $saldo = $_SESSION["usuario"]["saldo"];
    $compra = $saldo - $preco;
    $id = $_SESSION["usuario"]["id"];
if ($saldo>$preco) {
$conexao = new mysqli('localhost', 'root', '', 'motorsport', 3307);

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }
$_SESSION["usuario"]["saldo"] = $compra;
$sql = "UPDATE usuarios SET saldo = $compra WHERE id =$id";
$conexao->query($sql);
}
else {
    echo "<script>alert('Saldo insuficiente!');</script>";
}
}
?>
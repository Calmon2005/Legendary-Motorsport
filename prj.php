<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Legendary Motorsport</title>
    <link rel="stylesheet" href="prj.css">
</head>

<body>

    <!-- ÁREA INICIAL -->
    <section id="inicio">
        <h1>Legendary Motorsport</h1>
        <p>Os veículos mais lendários do mundo estão aqui.</p>
        <h2>Bem vindo(a), <?php echo $_SESSION["usuario"]["nome"]; ?></h2>
        <h2>R$ <?php echo $_SESSION["usuario"]["saldo"]; ?></h2>
        <button id="btnCadastro">Ir para o Cadastro</button>
        <button id="btnCarros">Carros</button>
    </section>


<script src="prj.js"></script>
</body>
</html>
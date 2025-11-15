<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carros Disponíveis</title>
    <link rel="stylesheet" href="prj.css">
</head>
<body>

<h1>Carros Disponíveis</h1>

<form>

    <form class="caixa" action="compra.php" method="POST">
            <img class="imagestyle" src="igm\488-Spider-Dianteira-2-scaled.jpg" alt="488 spider">
        <p id="prc">300000.00 </p>
        <button>Comprar</button>
    </form>
    
    <form class="caixa" action="compra.php" method="POST">
            <img class="imagestyle" src= "igm\FERRARI-812-GTS-DIANTEIRA-ESQUERDA.webp" alt="812 gts">
        <h2>Ferrari 812 GTS</h2>
        <p id="prc">200000.00</p>
        <button>Comprar</button>
    </form>

</form>

<button id="vlt" onclick="window.location.href='prj.html'">⭠ Voltar</button>


</body>
</html>
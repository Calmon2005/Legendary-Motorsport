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


<div>
    <div class="box-container">
        <h1>Carros Disponíveis</h1>
        <h2>Saldo autual: R$ <?php echo $_SESSION["usuario"]["saldo"]; ?></h2>
    </div>

    <form>



        <form>
        </form>

        <div class="box-container">

            <form class="caixa" action="compra.php" method="POST">
                <img class="imagestyle" src="igm\488-Spider-Dianteira-2-scaled.jpg" alt="488 spider">
                <h2>Ferrari 488 Spider</h2>
                <p>R$ 300.000.00 </p>
                <input type="hidden" name="prc" value="300000.00">
                <button type="submit">Comprar</button>
            </form>
            
            <form class="caixa" action="compra.php" method="POST">
                <img class="imagestyle" src= "igm\FERRARI-812-GTS-DIANTEIRA-ESQUERDA.webp" alt="812 gts">
                <h2>Ferrari 812 GTS</h2>
                <p>R$ 200.000.00</p>
                <input type="hidden" name="prc" value="200000.00">
                <button type="submit">Comprar</button>
            </form>
            
            <form class="caixa" action="compra.php" method="POST">
                <img class="imagestyle" src="igm\6765028_0_W_969e12f697.jpg" alt="porsche gts">
                <h2>Porsche GTS</h2>
                <p>R$ 500.000.00 </p>
                <input type="hidden" name="prc" value="500000.00">
                <button type="submit">Comprar</button>
            </form>

        </div>

    </form>

</div>
<button id="vlt" onclick="window.location.href='prj.php'">⭠ Voltar</button>


</body>
</html>
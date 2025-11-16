<?php
session_start();
?>
<?php
include "carros.php"; // agora você tem $carros aqui
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

            <?php foreach ($carros as $carro): ?>
                <form class="caixa" action="compra.php" method="POST">
                    <img class="imagestyle" src="<?= $carro['img'] ?>" alt="<?= $carro['nome'] ?>">
                    <h2><?= $carro['nome'] ?></h2>
                    <p>R$ <?= number_format($carro['preco'], 2, ',', '.') ?></p>
                    <input type="hidden" name="prc" value="<?= $carro['preco'] ?>">
                    <button type="submit">Comprar</button>
                </form>
            <?php endforeach; ?>

        </div>

    </form>

</div>
<button id="vlt" onclick="window.location.href='prj.php'">⭠ Voltar</button>


</body>
</html>
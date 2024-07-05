<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;

        $resto = $saque;
        // Saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // Saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // Saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // Saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;

        // echo "Seu saque de R\$$saque vai resultar em: $tot100 notas de 100, $tot50 notas de 50, $tot10 notas de 10 e $tot5 notas de 5. Faltou $resto reais a sacar.";
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" value="<?=$saque?>" required>
            <p style="font-size: 0.8em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" class="nota"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" class="nota"> x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" class="nota"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>
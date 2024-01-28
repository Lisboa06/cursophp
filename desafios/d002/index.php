<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Gerando número aleatório entre $min e $max <br> o número gerado foi: $num</p>";
        ?>
        <button onclick=window.location.reload()>Recarregar</button>
    </main>
</body>
</html>
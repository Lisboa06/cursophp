<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi: $n <br>";
                echo "O seu antecessor é: $a <br>";
                echo "O seu sucessor é $s <br>"
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>
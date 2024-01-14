<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia: " . date("/D/M/Y");
        echo "<br>";
        echo "A hora atual é: " . date("/G/i/s T");

    ?>
</body>
</html>
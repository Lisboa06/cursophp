<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <?php 
        $total = $_REQUEST['seg'] ?? 0;

        
    ?>
    <main>
        <h1>Calcular Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, [??] segundos equivalem a um total de:</p>
        <ul>
            <li>[??] semanas</li>
            <li>[??] dias</li>
            <li>[??] horas</li>
            <li>[??] minutos</li>
            <li>[??] segundos</li>
        </ul>
    </section>
</body>
</html>
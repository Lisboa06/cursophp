<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos pimitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        $var1 = 0X1A;
        echo "Valor da variável = $var1";
        print "<br />";
        
        $var2 = 300;
        var_dump($var2);
        print "<br />";

        $var3 = (int) "942";
        var_dump($var3);
    ?>
</body>
</html>
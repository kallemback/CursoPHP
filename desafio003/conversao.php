<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><center>Conversor de moedas</center></h1>
    <?php
        $cotação = 5.17;
        
        $real = $_REQUEST["din"] ?? 0;
        
        $dolar = $real / $cotação;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);


        echo "<p> Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
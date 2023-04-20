<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com numeros aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;

            $num = mt_rand($min, $max);

            echo "<p> Gerando um numero aleatório entre $min e $max... <br> O numero gerado foi $num</p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Regerar</button>

    </main>
    
</body>
</html>
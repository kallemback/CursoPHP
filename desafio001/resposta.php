<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"];
                $a = $n -1;
                $s = $n +1;
                echo "O numero escolhido foi <strong> $n </strong>";
                echo "O numero antecessor é $a, ";
                echo "e O numero sucessor é $s ";
            ?>
        </p>
        <button onclick="javascritp:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            $c = $_GET["cpf"];
            echo "<p> É um prazer te conhecer,
            <p> <strong> $n $s <p> </strong>CPF $c! <p> Este é o meu site!;"
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anteior</a></p>
    </main>
</body>
</html>
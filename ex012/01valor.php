<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01Valor</title>
</head>
<body>
    <div>
        <?php 
        
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a    " . number_format($rq, 2,);
        
        ?>
    <a href="index.html"></br>Voltar</a>


    </div>
</body>
</html>
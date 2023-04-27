<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1380.60;
        $salario = $_GET['sal']?? 0;   
    ?>
    <main>
       <h1>Informe seu Salário</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Salário (R$) </label>
        <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
        <p>Considerando o valor do salário minimo de R$ <strong><?=number_format($minimo, 2, ",", ".")?></strong> </p>
        <input type="submit" value="Calcular">
    
    </form> 

    </main>
    <section>
        <h2><center>Resultado Final</center></h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;  // o simbolo de % expoe o valor restante do calculo. ex: o valor restante do calcula do salario minimo.

            echo "<p>Quem recebe um salários de R$". number_format($salario, 2, ",", '.' ). " ganha <strong> $tot salários mínimos </strong> + R$ ". number_format($dif, 2, ",", "."). ".</p>"
        ?>
    </section>
</body>
</html>
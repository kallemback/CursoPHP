<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
    <style>
        h2 {
            font:  30pt arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <center>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2 </h2>";
        $m = ($n1 + $n2) / 2;
        echo "<br/> A soma vale" . ($n1 + $n2);
        echo "<br/> A subtração vale " . ($n1 - $n2 );
        echo "<br/> A mutiplicação vale" .( $n1 * $n2);
        echo "<br/> A divisão vale" . ( $n1 / $n2 ); 
        echo "<br/> O Modulo vale" . ( $n1 % $n2 );
        echo "<br/> A media vale $m";

       ?>
    
</div>
        </center>
</main>

</body>
</html>
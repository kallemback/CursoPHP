<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>

<?php 

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A media entre $nota1 e $nota2 é $m <br/>";
   //$sit = ($m<6)?"REPROVADO":"APROVADO";
   echo "Situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");
   
   
    // $r = ($tipo == "s")? $n1 + $n2: $n1*$n2;



?>
    
</body>
</html>
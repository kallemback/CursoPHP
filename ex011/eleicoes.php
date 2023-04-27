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

    $ano= $_GET["an"];
    $idade = 2023 - $ano;
    //$m = ($nota1+$nota2)/2;
    echo "Quem nasceu em $ano, tem idade de $idade anos";
    $tipo = ($idade>= 18 && $idade <65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
    echo " <br/>E dessa forma seu voto é: $tipo";
   //$sit = ($m<6)?"REPROVADO":"APROVADO";
  // echo "Situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");
   
   
    // $r = ($tipo == "s")? $n1 + $n2: $n1*$n2;



?>
    
</body>
</html>
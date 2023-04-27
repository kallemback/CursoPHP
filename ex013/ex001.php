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
        
            $a = isset ($_GET["ano"])?$_GET["ano"]:1900;
            $i = date('Y') - $a;

            echo "Você nasceu em $a então tem $i anos. ";
            if($i >= 18) {
                $v = "pode votar";
                $d = "pode dirigir";

            }
            else{
                $v = "Não pode votar";
                $d = "Não pode dirigir";
            }

            echo "Com essa idade você $v e também $d";
        
        ?>
    <a href="ex001.html"></br>Voltar</a>


    </div>
</body>
</html>
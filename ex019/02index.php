<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <div>


           <form action="tabuada.php" method="get">
                <select name="num" id="num">
            
                <?php 
                    for ($n=1; $n<=10; $n++) {

                        echo "<option>$c</option>";

                    }
                ?>

                </select>
                <input type="submit" value="Tabuada "/>
           </form>
    
    </div>
</body>
</html>
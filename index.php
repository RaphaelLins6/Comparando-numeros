<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de revisão</title>
</head>
<body>
    <form action="index.php" method="GET">
        n1 <input type="number" name="n1">
        n2 <input type="number" name="n2">
        n3 <input type="number" name="n3">
        <button type="submit">Enviar</button>
    </form>
    
    <?php

        $n1 = @$_GET['n1'];
        $n2 = @$_GET['n2'];
        $n3 = @$_GET['n3'];

        if ($n1 > $n2 && $n1 > $n3){
           
            echo "O número maior é ".$n1.PHP_EOL;
        } 
        elseif ($n2 > $n1 && $n2 > $n3){
           
            echo "O número maior é ".$n2.PHP_EOL;
        }
         elseif ($n3 > $n1 && $n3 > $n2){
           
            echo "O número maior é ".$n3.PHP_EOL;
        }

        if ($n1 < $n2 && $n1 < $n3){
           
            echo "e o número menor é ".$n1.PHP_EOL;
        } 
        elseif ($n2 < $n1 && $n2 < $n3){
           
            echo "e o número menor é ".$n2.PHP_EOL;
        }
         elseif ($n3 < $n1 && $n3 < $n2){
           
            echo "e o número menor é ".$n3.PHP_EOL;
        }
?>
</body>
</html>
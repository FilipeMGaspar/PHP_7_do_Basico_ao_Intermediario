<?php

$soma = 1 + 3;
$subtracao = 5 - 2;
$multiplicacao = 5 * 2;
$divisao = 9 / 2;
$restoDivisao = 5 % 2;


echo $soma ."<br>";
echo $subtracao."<br>";
echo $multiplicacao."<br>";
echo $divisao."<br>";

echo "<br>". 2+2 ."<br>";
?>

<!doctype html>
<html lang="pt-PT">
    <head>
        <title>Operadores matemáticos</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>1 + 3 = <?=$soma?></p> 
        <p>5 - 2 = <?=$subtracao?></p>
        <p>5 x 2 = <?=$multiplicacao?></p>
        <p>10 / 2 = <?=$divisao?></p>
        <p>Resto da divisao 5:2 =<?=$restoDivisao?> </p>
        <br>
        <p><?=($soma * $divisao)?></p>
    </body>
</html>

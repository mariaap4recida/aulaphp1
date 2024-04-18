<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 09</title>
</head>
<body>
<!--
Escreva um algoritmo que leia dois números inteiros e compare-os, mostrando
na tela uma das mensagens abaixo:
- O primeiro valor é o maior
- O segundo valor é o maior
- Não existe valor maior, os dois são iguais
-->
<div>
    <?php 
    $n1 = $_GET ["n1"];
    $n2 = $_GET ["n2"];
    if ($n1 > $n2) {
    echo "O múmero $n1 é maior que $n2.";
    }
    elseif ($n1 < $n2) {
        echo "O múmero $n1 é menor que $n2.";
    }
    else
    echo "O múmero $n1 é igual a $n2.";
    
    
    ?>

</div>
</body>
</html>
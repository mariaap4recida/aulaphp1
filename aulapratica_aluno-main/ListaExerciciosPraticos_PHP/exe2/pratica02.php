<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 02</title>
</head>
<body>
<!--
Faça um programa que leia um número inteiro e mostre o seu antecessor e seu sucessor. Ex:
Digite um número: 9
O antecessor de 9 é 8
O sucessor de 9 é 10
-->
<div>
    <?php 
    $n1 = $_GET ["n1"];
    $suc = $n1+1;
    $ant = $n1-1;
    if ($n1 == true) {
        echo "O sucessor de $n1 é $suc e o antecessor de $n1 é $ant.";
    }
    else
    echo "Voce não digitou corretamente...";
    
    
    
    ?>

</div>
</body>
</html>
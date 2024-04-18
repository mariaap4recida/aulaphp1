<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 04</title>
</head>
<body>
<!--
Faça um algoritmo que leia o salário de um funcionário,
calcule e mostre o seu novo salário, com 15% de aumento.
-->
<div>
    <?php 
    $fun = $_GET ["func"];
    $sal = $_GET ["sal"];
    $aumento = 15.0;
    $aumentosal = ($aumento/100)*$sal;
    $novosal = $sal + $aumentosal;
    if ($fun && $sal == true) {
        echo "Ola $fun, boa tarde.";
        echo "<br/>Seu salário anterimente: R$" . number_format($sal,2,",",".");
        echo "<br/>Seu salário com desconto de 15%: R$." . number_format($novosal,2,",",".");
    }
    else 
    echo "Voce não digitou corretamente.";
    
    
    
    ?>

</div>
</body>
</html>
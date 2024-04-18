<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 06</title>
</head>
<body>
<!--
Crie um programa que leia o número de dias trabalhados em um mês
e mostre o salário de um funcionário, sabendo que ele trabalha
8 horas por dia e ganha R$25 por hora trabalhada.
-->
<div>
    <?php 
    $dia = $_GET ["dia"];
    $horas = 8;
    $valor_hora = 25;
    $vt = $dia * $horas * $valor_hora;
    if ($dia == true) {
        echo "Boa tarde, voce trabalhou por $dia, total do seu salario R$" . number_format($vt,2,",");
    }
    else {
        echo "Voce não digitou corretamente.";
    }    
    
    
    
    
    ?>

</div>
</body>
</html>
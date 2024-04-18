<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 05</title>
</head>
<body>
<!--
A locadora de carros precisa da sua ajuda para cobrar seus serviços. Escreva um programa que pergunte a quantidade de Km percorridos por um carro alugado e a quantidade de dias pelos quais ele foi alugado. Calcule o preço total a pagar,
sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.
-->
<div>
    <?php 
    $nome = $_GET ["nome"];
    $dia = $_GET ["dia"];
    $km = $_GET ["km"];
    $valor_dias = $dia*90;
    $valor_km = $km*0.20;
    $vt = $valor_dias + $valor_km;
    if ($nome == true) {
        echo "Boa tarde, $nome, voce alugou o  carro por $dia. Valor total R$" . number_format($vt,2,",");
    }
    else {
        echo "Voce não digitou corretamente.";
    }
    
    ?>

</div>
</body>
</html>
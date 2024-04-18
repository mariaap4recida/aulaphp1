<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
    <style>
        h2 { 
            color: red;
            font: 16px arial;
        }
    </style>
</head>
<body>
<!--
Crie um programa que leia o nome e o salário de um funcionário,
mostrando no final uma mensagem. Ex:
Nome do Funcionário: Maria do Carmo
Salário: R$1.850,45
O funcionário Maria do Carmo tem um salário de R$1.850,45 em (data de hoje).
-->
<div>
    <?php 
    $nome = $_GET ["nome"];
    $fun_sal = $_GET ["fun_sal"];
    
    if ($nome == true) {
        echo "Olá, $nome, Boa Tarde. <br/>Seu salário é de R$" . number_format($fun_sal,2,",",".");
        echo "<h2>No dia " . date('D-m-Y:H:m:s') . "</h2>";
    }
    else {
        echo "Voce não digitou as informações corretamente...";
    }
    
    
    
    ?>

</div>
</body>
</html>
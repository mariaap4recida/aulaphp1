<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 08</title>
</head>
<body>
<!--
Numa promoção exclusiva para o Dia da Mulher,
uma loja quer dar descontos para todos,
mas especialmente para mulheres.
Faça um programa que leia nome,
sexo e o valor das compras do cliente
e calcule o preço com desconto. Sabendo
que:
- Homens ganham 5% de desconto
- Mulheres ganham 13% de desconto
-->
<div>
    <?php 
    $nome = $_GET["nome"];  
    $vp = $_GET["vp"];
    $o = $_GET ["oper"];
    switch ($o) {
        case 1:
            $des = ($vp*5)/100;
            $vpd = $vp - $des;
            echo "O valor total: R$" . number_format($vpd,2,",",".");
            break;
        case 2:
            $des = ($vp*13)/100;
            $vpd = $vp - $des;
            echo "O valor total: R$" . number_format($vpd,2,",",".");
            break;
        
        default:
            
            break;
    }
    
    ?>

</div>
</body>
</html>
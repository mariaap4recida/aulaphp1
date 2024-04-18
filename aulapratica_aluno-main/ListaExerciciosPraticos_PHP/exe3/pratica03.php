<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 03</title>
</head>
<body>
<!--
Crie um programa que leia o preço de um produto,
calcule e mostre o seu PREÇO PROMOCIONAL,
com 5% de desconto.
-->
<div>
    <?php 
      $vp = $_GET ["vp"];
      $des = ($vp*5)/100;
      $vd = $vp - $des;
    if ($vp == true) {
        echo "O valor foi R$" . number_format($vp,2,",",".");
        echo "<br/>O Valor do desconto foi R$:" . number_format($des,2,",");
        echo "<br/>O Valor final do produto foi: R$" . number_format($vd,2,",",".");
    }
    else {
        echo "Voce não digitou corretamente";
    }
    
    
    ?>

</div>
</body>
</html>
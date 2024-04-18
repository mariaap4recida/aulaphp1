<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 07</title>
</head>
<body>
<!--
Escreva um programa que pergunte a velocidade de um carro.
Caso ultrapasse 80Km/h, exiba uma mensagem dizendo que o
usuário foi multado. Nesse caso, exiba o valor da multa,
cobrando R$5 por cada Km acima da velocidade permitida.
-->
<div>
    <?php 
    $km = $_GET ["km"];
    $vel_max = 80;
    $vel_ultra = $km - $vel_max;
    $vel_multa = $vel_ultra * 5;
    if ($km == true) {
        if ($km > 80) {
            echo "<h2>Voce foi multado!</h2><br/>";
            echo "Sua velocidade foi de $km Km/h.<br/>";
            echo "Voce utrapassou $vel_ultra Km/h.<br/>";
            echo "O valor da sua multa.<br/>";
        }
    else {
        echo "Voce não foi multado!";
        echo "Siga em frente. &#128077;";
    }
    }
    
    else {
        echo "Voce não digitou um número... :/";
    }
    
    ?>
    <br>
    <br>
    <a href="ex01.html"><button><span> Voltar </span></button></a> 
    
    
    
    
    
    ?>

</div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 10</title>
</head>
<body>
<!--
Crie um programa que leia duas notas de um aluno e calcule a sua média,
mostrando uma mensagem no final, de acordo com a média atingida:
- Média até 4.9: REPROVADO
- Média entre 5.0 e 6.9: RECUPERAÇÃO
- Média 7.0 ou superior: APROVADO
-->
<div>
<?php 
    $n1 = $_GET ["n1"];
    $n2 = $_GET ["n2"];
    $media = ($n1 + $n2 )/2;
    if ($media >= 7) {
        echo "Aprovado!";
        echo "<br/>Nota do aluno: $media.";
    }
    elseif ($media >= 5 && $media <= 6.99) {
        echo "Recuperação!";
        echo "<br/Nota do aluno: $media.";
    }
    elseif ($media <= 4.99) {
        echo "Reprovado!";
        echo "<br/>Nota do aluno: $media.";
    }

    else {
        echo "Reprovado!";
        echo "<br/>Nota do aluno: $media.";
    }
    
    
    ?>
    <br>
    <br>
    <a href="pratica10.html"><button>Voltar</button></a>


</div>
</body>
</html>
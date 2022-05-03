<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Variáveis</title>
</head>
    <body>
        <?php
            //String 
            $nome = 'Thiago de S. Sousa';
            
            //int
            $idade = 32;
            
            //float
            $peso = 74.2;

            //boolean
            $fumante = false;

            //Lógica script

            $idade += 1;

            //Concatenação

            echo 'Olá '. $nome . ' você possui ' . $idade . ' anos<br>';
            echo "Olá $nome você possui $idade anos."
        ?>

        <H1>Ficha Cadastral</H1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante ?></p>
    </body>
</html>
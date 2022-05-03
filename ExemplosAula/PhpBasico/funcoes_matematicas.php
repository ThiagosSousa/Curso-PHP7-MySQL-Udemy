<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções Nativas Matemáticas PHP</title>
    </head>
    <body>
        <?php

            $num = 7.5;
            //ceil - arredonda para cima
            echo $num . '<br />';
            echo ceil($num) . '<br />';
            echo '<hr />';

            //floor - arrendonda para baixo
            echo $num . '<br />';
            echo floor($num) . '<br />';
            echo '<hr />';

            //Round - arrendonda com base na fração
            echo $num . '<br />';
            echo round($num) . '<br />';
            echo '<hr />';

            //Rand - gera um valor aleatório
            echo rand() . '<br />';
            echo getrandmax() . '<br />';
            echo rand(10,20) . '<br />'; //definindo os valores máximos e mínimos possíveis
            echo '<hr />';

            //Sqrt - retorna a raiz quadrada
            echo $num . '<br />';
            echo sqrt($num) . '<br />';
            echo '<hr />';
        ?>
    </body>
</html>
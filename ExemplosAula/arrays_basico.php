<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays Básicos em PHP</title>
    </head>
    <body>
        <?php
            /*
            //sequenciais numéricos
            $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
            //Opção para inicialização do array é "$lista_frutas[] = ['Banana', 'Maça', 'Morango', 'Uva'];"
            $lista_frutas[] = 'Abacaxi';

            echo '<pre>';
            var_dump($lista_frutas);
            echo '</pre>';
            echo '<pre>';
            echo '<hr />';
            print_r($lista_frutas);
            echo '</pre>';
            */

            //arrays associativos
            $lista_frutas = array(
                'a' => 'Banana',
                'b' => 'Maça',
                'x' => 'Morango',
                'y' => 'Uva');
            
                echo '<pre>';
                var_dump($lista_frutas);
                echo '</pre>';

                echo '<br />' . $lista_frutas['x'];
        ?>
    </body>
</html>
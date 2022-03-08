<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays Multidimensionais em PHP</title>
    </head>
    <body>
        <?php
            
            //lista coisas
            $lista_coisas = [];

            $lista_coisas['frutas'] = array('1' => 'Banana','2' => 'Maça','3' => 'Morango','4' => 'Uva');
            $lista_coisas['pessoas'] = array('1' => 'João', '2' => 'José', '3' => 'Maria');

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            echo '<br />';
            echo $lista_coisas['frutas'][3];
            echo '<br />';
            echo $lista_coisas['pessoas'][2];
        ?>
    </body>
</html>
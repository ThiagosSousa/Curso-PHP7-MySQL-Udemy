<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções para Arrays em PHP</title>
    </head>
    <body>
        <?php

            //is_array - verifica se é um array e retorna true ou false
            $array = 'Array';
            $array2 = array();


            echo is_array($array) ? 'Sim, é um array' : 'Não, não é um array';
            echo '<hr />';
            echo is_array($array2) ? 'Sim, é um array' : 'Não, não é um array';
            echo '<hr />';

            //array_keys - retorna um arrays com as chaves do array passado no parametro

            $array3 = [1 => 'a', 7 => 'b', 13 => 'c'];
            echo '<pre>';
                print_r($array3);
            echo '<pre />';

            $chaves_array = array_keys($array3);
            echo '<pre>';
                print_r($chaves_array);
            echo '<pre />';

            echo '<hr />';
            //sort - ordena um array
            $array4 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
            echo '<pre>';
                print_r($array4);
            echo '<pre />';

            sort($array4); //retorna true se tiver ordenado o array ou false se não ordenou
            echo '<pre>';
                print_r($array4);
            echo '<pre />';

            echo '<hr />';
            //asort - funbciona como o sort, porém preserva o índice
            $array5 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
            echo '<pre>';
                print_r($array5);
            echo '<pre />';

            asort($array5); //retorna true se tiver ordenado o array ou false se não ordenou preservando o índice dos elementos.
            echo '<pre>';
                print_r($array5);
            echo '<pre />';

            echo '<hr />';
            //count - conta a quantidade de elementos de um array
            echo count($array5) . ' elementos';

            echo '<hr />';
            //array_merge - funde um ou mais arrays
            $array6 = array_merge($array4, $array3);
            echo '<pre>';
                print_r($array6);
            echo '<pre />';
            
            echo '<hr />';
            //explode - divide uma string baseado em um delimitador
            $string = '26/04/2018';
            echo $string;
            $arrayRetorno = explode('/', $string);
            echo '<pre>';
                print_r($arrayRetorno);
            echo '<pre />';

            echo '<hr />';
            //implode - junta elementos de um array em uma string
            $stringRetorno = implode('-', $arrayRetorno);
            echo $stringRetorno;


        ?>
    </body>
</html>
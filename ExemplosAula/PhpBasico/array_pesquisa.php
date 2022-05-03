<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays Pesquisa em PHP</title>
    </head>
    <body>
        
        <?php
            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

            echo '<pre>';
            print_r($lista_frutas);
            echo '</pre>';
            
            //in_array - Retorna true ou false para a existência da busca
            $existe = in_array('Maça', $lista_frutas);

            echo $existe ? 'Sim, o valor pesquisado existe no array.' : 'Não, o valor pesquisado não existe no array.';
            
            //array_search - Retorna o índice do valor pesquisado, quando encontrado
            echo '<hr />';
            echo array_search('Uva', $lista_frutas) . '<br />';
            echo array_search('Abacaxi', $lista_frutas) . '<br />';//O retorno para quando o valor pesquisado não é encontrado no array é "null".

        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções Nativas String PHP</title>
    </head>
    <body>
        <?php
            $texto = 'curso completo de PHP';
            
            //String to lower
            echo $texto . '<br />';
            echo strtolower($texto) . '<br />';
            echo '<hr />';

            //String to uper
            echo $texto . '<br />';
            echo strtoupper($texto) . '<br />';
            echo '<hr />';
            
            //Upper case first - primeira maiuscula
            echo $texto . '<br />';
            echo ucfirst($texto) . '<br />';
            echo '<hr />';

            //String length - Quantidade de caracteres
            echo $texto . '<br />';
            echo strlen($texto) . '<br />';
            echo '<hr />';

            //String replace - Procura e substitui uma cadeia de caracteres
            echo $texto . '<br />';
            echo str_replace('PHP', 'PHP7', $texto) . '<br />';
            echo '<hr />';

            //String sub - Retorna a cadeia de caracteres
            echo $texto . '<br />';
            echo substr($texto, 1, 4) . '<br />';
            echo '<hr />';
        ?>
    </body>
</html>
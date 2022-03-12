<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>False, Null e Empty em PHP</title>
    </head>
    <body>
        
        <?php
            //false (true/false) - tipo de variável boolean

            $funcionario1 = null;
            $funcionario2 = '';
            $funcionario3 = false;

            //valores null - is_null
            echo is_null($funcionario1) ? 'Sim, a variável é null' : 'Não, a variável não é null.';
            echo '<br />';
            echo is_null($funcionario2) ? 'Sim, a variável é null' : 'Não, a variável não é null.';
            echo '<br />';
            echo is_null($funcionario3) ? 'Sim, a variável é null' : 'Não, a variável não é null.';
            echo '<hr />';

            //valores vazios - empty
            echo '<br />';
            echo empty($funcionario1) ? 'Sim, a variável está vazia' : 'Não, a variável não está vazia.';
            echo '<br />';
            echo empty($funcionario2) ? 'Sim, a variável está vazia' : 'Não, a variável não está vazia.';
            echo '<br />';
            echo empty($funcionario3) ? 'Sim, a variável está vazia' : 'Não, a variável não está vazia.';
        ?>
    </body>
</html>
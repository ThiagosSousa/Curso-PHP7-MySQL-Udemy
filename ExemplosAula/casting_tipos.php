<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casting Tipos PHP</title>
    </head>
    <body>
        <?php
            //gettype() => retorna o tipo da variável.
            $valor = 10;

            echo $valor.' => '.gettype($valor);

            $valor2 = (float) $valor;
            
            echo '<br />'.$valor2.' => '.gettype($valor2);

            $valor3 = (String) $valor;
            
            echo '<br />'.$valor3.' => '.gettype($valor3);

            //Os tipos de conversão por casting no PHP são:

            //int -> float ou string;
            //float -> int ou string;
            //string -> int, float ou boolean;
            //boolean -> int ou string 
        ?>
    </body>
</html>
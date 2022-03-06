<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções PHP</title>
    </head>
    <body>
        <?php
            //Função do tipo void, sem retorno.
            function exibirBoasVindas(){
                echo 'Bem-vindo ao curso de PHP!<br />';
            }
            
            exibirBoasVindas();

            //Função com retorno
            function calcularAreaTerreno($largura, $comprimento){
                $area = $largura * $comprimento;
                return $area;
            }
            
            echo 'A área de um terreno 10 x 15 é = '.calcularAreaTerreno(10,15);
        ?>
    </body>
</html>
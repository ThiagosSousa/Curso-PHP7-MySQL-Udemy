<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops Pratica 2 em PHP</title>
    </head>
    <body>
        <?php
        
            $funcionarios = [
                array('nome' => 'João', 'salario' => 2500, 'dataNascimento' => '06/03/1993'),
                array('nome' => 'Maria', 'salario' => 3000),
                array('nome' => 'Júlia', 'salario' => 2200)
            ];

            foreach($funcionarios as $indice => $funcionario){
                foreach($funcionario as $indice2 => $valor){
                    echo "Índice $indice2 - $valor <br />";
                }
                echo '<hr />';
            }    

        ?>
    </body>
</html>
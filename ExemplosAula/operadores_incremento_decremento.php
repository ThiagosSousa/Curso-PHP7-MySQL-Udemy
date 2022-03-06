<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Incremento e Decremento PHP</title>
    </head>
    <body>
        <h3>Pós-incremento</h3>
        <?php
            $a = 7;
            
            echo "o valor contido em a é $a <br />";
            echo 'o valor contido em a após o incremento é '.$a++ .'<br />';
            echo "o valor atualizado de a é $a <br />";
        ?>
        <h3>Pré-incremento</h3>
        <?php
            $a = 7;
            
            echo "o valor contido em a é $a <br />";
            echo 'o valor contido em a pré o incremento é '.++$a .'<br />';
            echo "o valor atualizado de a é $a <br />";
        ?>
        <h3>Pós-decremento</h3>
        <?php
            $a = 7;
            
            echo "o valor contido em a é $a <br />";
            echo 'o valor contido em a após o decremento é '.$a-- .'<br />';
            echo "o valor atualizado de a é $a <br />";
        ?>
        <h3>Pré-decremento</h3>
        <?php
            $a = 7;
            
            echo "o valor contido em a é $a <br />";
            echo 'o valor contido em a pré o decremento é '.--$a .'<br />';
            echo "o valor atualizado de a é $a <br />";
        ?>
    </body>
</html>
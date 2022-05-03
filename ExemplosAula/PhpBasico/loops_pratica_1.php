<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops Prática em PHP</title>
    </head>
    <body>
        
        <?php
            $registros = array(
                array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
                array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
                array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
                array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4')
            );

            //percorrendo com while
            echo '<h1>Percorrendo o array com while</h1>';
            $indice = 0;
            while($indice < count($registros)){
                
                echo '<h3>' . $registros[$indice]['titulo'] . '</h3>';
                echo $registros[$indice]['conteudo'] . '<hr />';
                $indice++;
            }

            echo '<h1>Percorrendo o array com do while</h1>';
            //percorrendo com do while
            $indice = 0;
            do{
                echo '<h3>' . $registros[$indice]['titulo'] . '</h3>';
                echo $registros[$indice]['conteudo'] . '<hr />';
                $indice++;    
            } while($indice < count($registros));

            echo '<h1>Percorrendo o array com for</h1>';
            //percorrendo com for
            for($indice = 0; $indice < count($registros); $indice++){
                echo '<h3>' . $registros[$indice]['titulo'] . '</h3>';
                echo $registros[$indice]['conteudo'] . '<hr />';
            }

        ?>
    </body>
</html>
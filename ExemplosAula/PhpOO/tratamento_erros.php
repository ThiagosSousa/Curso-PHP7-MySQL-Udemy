<?php
    /*
    try{
        echo '<h3> *** Try *** </h3>';

        $sql = 'Select * from clientes';
        mysql_query($sql); //Erro

    } catch (Error $e) { //Tratamento do erro
        echo '<h3> *** Catch *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //captura do erro, podendo armazenar em um banco de dados, por exemplo, para posterior tratamento.
    }finally {
        echo '<h3> *** Finally *** </h3>';
    }
    */

    try {
        echo '<h3> *** Try *** </h3>';
        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão não estava disponível. Vamos seguir mesmo sem ele.'); //Aqui poderia ser implementado uma Exception ou um Error.
        }
    } catch (Error $e) { //Tratamento do erro
        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //captura do erro, podendo armazenar em um banco de dados, por exemplo, para posterior tratamento.
    } catch (Exception $e){
        echo '<h3> *** Catch Exception*** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
    } finally {
        echo '<h3> *** Finally *** </h3>';
    }
?>
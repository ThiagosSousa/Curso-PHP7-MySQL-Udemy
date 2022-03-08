<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções Nativas Datas PHP</title>
    </head>
    <body>
        <?php

            //Recuperar a data atual
            echo date('d/m/Y H:i');

            //recuperando o timezone
            echo '<br />';
            echo date_default_timezone_get();

            //alterando o timezone em tempo de execução
            echo '<br />';
            date_default_timezone_set('Europe/Berlin');
            echo '<br />';
            echo date('d/m/Y H:i') . '<br />';
            echo date_default_timezone_get() . '<br />';

            //Realizando cálculo entre datas

            $dataInicial = '1989-09-03';
            $dataFinal =  '2022-03-07';

            //timestamp
            $timeInicial = strtotime($dataInicial);
            echo $dataInicial . ' - ' . $timeInicial . '<br />';
            $timeFinal = strtotime($dataFinal);
            echo $dataFinal . ' - ' . $timeFinal . '<br />';

            $diferencaTime = $timeFinal - $timeInicial;
            echo 'A diferença de segundos entre a data inicial e a data final é ' . $diferencaTime . '<br />';
            $diferencaDate = $diferencaTime/86400;
            echo 'A diferença de dias entre a data inicial e a data final é ' . $diferencaDate . '<br />';
        ?>
    </body>
</html>
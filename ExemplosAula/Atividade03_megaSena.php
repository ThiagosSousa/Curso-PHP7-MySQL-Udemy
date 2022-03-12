<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mega Sena em PHP</title>
    </head>
    <body>
        <?php
            function inicializaSorteio(){
                $numerosSorteados = array(
                    '1' => null,
                    '2' => null,
                    '3' => null,
                    '4' => null,
                    '5' => null,
                    '6' => null
                );
                return $numerosSorteados;
            }

            function sorteiaNumero($numerosSorteados, $ordemBola){
                $numeroSorteado = rand(1, 60);
                if(!in_array($numeroSorteado,$numerosSorteados)){
                    $numerosSorteados[$ordemBola] = $numeroSorteado;
                } else {
                    $numerosSorteados = sorteiaNumero($numerosSorteados, $ordemBola);
                }
                return $numerosSorteados;
            }
            
            echo '<h1>Este é o sorteio da Mega Sena</h1>';
            
            $sorteio0001 = inicializaSorteio();
            for($quantidadeNumeros = 1; $quantidadeNumeros <= 6; $quantidadeNumeros++){
                $sorteio0001 = sorteiaNumero($sorteio0001, $quantidadeNumeros);
                echo 'O ' . $quantidadeNumeros . 'º número sorteado é o ========> ' . $sorteio0001[$quantidadeNumeros] . '<br />';
            }
            

            echo "Os seis números sorteados são os: ";
            foreach($sorteio0001 as $numero){
                echo "$numero ";
            }
            
        ?>
    </body>
</html>
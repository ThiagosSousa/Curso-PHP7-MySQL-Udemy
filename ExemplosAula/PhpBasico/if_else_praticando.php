<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Praticando</title>
</head>
    <body>
        <?php
            //Regra de negócio
            $usuarioPossuiCartaoLoja = true;
            $valorCompra = 50;

            $valorFrete = 50;
            $recebeuDescontoFrete = true;

            if($usuarioPossuiCartaoLoja == true && $valorCompra >= 400){
                $valorFrete = 0;
            } else if($usuarioPossuiCartaoLoja && $valorCompra >= 300){
                $valorFrete = 10;
            } else if($usuarioPossuiCartaoLoja && $valorCompra >= 100){
                $valorFrete = 25;
            } else {
                $recebeuDescontoFrete = false;
            }
        ?>

        <h1>Detalhes do pedido</h1>
        
        <p>Possui cartão da loja? <?= /*Com operador ternário <condição> ? true : false;*/$usuarioPossuiCartaoLoja == true ? 'SIM' : 'NÃO';?>
            <?php
                /*//Com if-else
                if($usuarioPossuiCartaoLoja){
                    echo 'SIM';
                } else {
                    echo 'NÃO';
                }
                */
                
                
            ?>
        </p>
            
        <p>Valor da compra: <?= $valorCompra ?></p>

        <p>Recebeu desconto no frete?
            <?php
                //Outra forma de utilização do operador ternário

                $retorno = $recebeuDescontoFrete ? 'SIM' : 'NÃO';
                echo $retorno;
                /*
                if($recebeuDescontoFrete){
                    echo 'SIM';    
                }else{
                    echo 'NÃO';
                }
                */
            ?>
        </p>

        <p>Valor do frete: <?= $valorFrete ?></p>
    </body>
</html>
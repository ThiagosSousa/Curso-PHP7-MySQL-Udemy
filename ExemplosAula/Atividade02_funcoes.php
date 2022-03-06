<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 02 - Funções em PHP</title>
    </head>
    <body>
        <h1>Cálculo IRPF</h1>
        <?php
            //Regras de Negócio
            function calcularImposto($salario, $nome){
                echo "Nome: $nome <br />";
                echo "Salário: $salario <br />";
                if($salario <= 1903.98){
                    $aliquota = 0.075;
                } else if($salario >= 1903.99 && $salario <= 2826.65) {
                    $aliquota = 0.15;
                } else if($salario >= 2826.66 && $salario <= 3751.05) {
                    $aliquota = 0.225;
                } else {
                    $aliquota = 0.275;
                }
                echo 'Valor do Imposto = '.($salario * $aliquota);
            }

            calcularImposto(2500.00, 'Thiago');
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 01 - Doação de Sangue</title>
    </head>
    <body>
        <?php
            //Regras de negócio
            $pessoaPodeDoarSangue = false;
            $nome = 'Lucas';
            $idade = 16;
            $peso = 45;

            if($idade >= 16 && $idade <= 69 && $peso >= 50){
                $pessoaPodeDoarSangue = true;
            }
        ?>

        <h1>Detalhes do Doador</h1>

        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Pode doar Sangue? <?= $pessoaPodeDoarSangue == true ? 'SIM' : 'NÃO';?></p>
    </body>
</html>
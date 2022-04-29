<?php
    session_start();

    /*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    //remover índices do array de sessão
    //unset()
    unset($_SESSION['x']);

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    unset($_SESSION['x']); //Não será executado, pois ele remove o índice, apenas se ele existir.


    //destruir a variável de sessão
    //session_destroy();

    session_destroy(); //A session foi destruída, mas o acesso as variáveis ainda continuam, pois já foram requisitados, realizar o redirecionamento para finalizar o acesso.

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
?>
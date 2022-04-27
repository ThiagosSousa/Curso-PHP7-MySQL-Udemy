<?php
    
    //Usuários do Sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcdef'),
    );

    /*
    echo '<pre>';
        print_r($usuarios_app);
    echo '/<pre>';
    */

    //Variável para verificar a autenticação
    $usuario_autenticado = false;

    foreach($usuarios_app as $user){
        /*
        echo 'usuário app: ' . $user['email'] . ' / ' . $user['senha'];
        echo '<br />';
        echo 'usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];
        */

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }
    if($usuario_autenticado){
        echo 'Usuário Autenticado';
    } else {
        //echo 'Erro na autenticação do usuário';
        header('Location: index.php?login=erro');
    }
    /*
    //Requisição pelo metodo get
    print_r($_GET);

    echo '<br />';
    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];
    */


    //Requisição pelo método post
    /*
    print_r($_POST);

    echo '<br />';
    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];
    */
?>
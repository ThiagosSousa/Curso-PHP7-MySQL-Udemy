<?php

    session_start();
    
    //Tratando os dados para adicionar ao arquivo
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //criando o arquivo
    $arquivo = fopen('../../../../../../app_help_desk/arquivo.txt','a');

    //Escrevendo no arquivo 

    fwrite($arquivo, $texto);

    fclose($arquivo);

    //Redirecionamento para a página de abrir chamado.
    header('Location: abrir_chamado.php');
    
?>
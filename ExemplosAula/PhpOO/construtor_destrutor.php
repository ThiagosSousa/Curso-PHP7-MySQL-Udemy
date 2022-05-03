<?php

    class Pessoa {
        public $nome = null;

        //Construtor
        function __construct($nome) {
            $this->nome = $nome;
        }

        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo'; 
        }
    }

    $pessoa = new Pessoa('Thiago');
    echo 'Nome: ' . $pessoa->__get('nome') . '<br />';
    echo $pessoa->correr();

    echo '<br />';
    unset($pessoa); //Destruct executado propositalmente, mas a finalização do script tmb retorna o destruct automaticamente.
    


?>
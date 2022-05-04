<?php

    class MinhaExceptionCustomizada extends Exception {
        private $errp = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white">';
                echo $this->erro;
            echo '</div>';
        }
    }
    try {
        throw new MinhaExceptionCustomizada('Esse é um erro de teste');

        //Error (funções nativas PHP)
        //Exception (Geralmente programadores lançam exceções)
        //Customizadas (Quando programadores precisam de uma exceção personalizada)
    } catch (MinhaExceptionCustomizada $e) {
        echo $e->exibirMensagemErroCustomizada();
    }


?>
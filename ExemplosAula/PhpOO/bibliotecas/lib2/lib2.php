<?php
    namespace B;
    class Cliente implements CadastroInterface{
        public $nome = "Thiago Sousa";
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function remover(){
            echo 'Remover';
        }
    }

    interface CadastroInterface{
        public function remover();
    }


?>
<?php
    namespace A;
    class Cliente implements CadastroInterface{
        public $nome = "Thiago";

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo 'Salvar';
        }
    }

    interface CadastroInterface{
        public function salvar();
    }
    /*
    $c = new Cliente();
    print_r($c);
    echo $c->nome;
    echo '<br />';
    $d = new \A\Cliente();
    print_r($d);
    echo $d->nome;
    */
?>
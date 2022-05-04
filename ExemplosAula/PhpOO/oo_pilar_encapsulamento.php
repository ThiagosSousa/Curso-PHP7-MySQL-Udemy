<?php

    class Pai {
        private $nome = 'Thiago';
        protected $sobrenome ='Sousa';
        public $humor = 'Feliz';
        
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        
        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'oi';
        }

        public function executarAcao(){
            $this->executarMania();
        }

    }
    
    class Filho extends Pai {
        /*
        public function getAtributo($atributo){
            return $this->$atributo;
        }

        public function setAtributo($atributo,$valor){
            $this->$atributo = $valor;
        }
        */
    }
    

    /*
    $pai = new Pai();
    echo $pai->__get('nome');
    $pai->__set('sobrenome', 'de Siqueira Sousa');
    echo '<br />';
    echo $pai->sobrenome;
    echo '<br />';
    echo $pai->executarAcao();
    */

    $filho = new Filho();
    echo '<pre>';
        print_r($filho);
    echo '</pre>';
    /*
    echo $filho->getAtributo('humor');
    $filho->setAtributo('humor','Triste');
    echo '<br />';
    echo $filho->getAtributo('humor');
    */
    //exibir os métodos do objeto
    echo '<pre>';
        print_r(get_class_methods($filho));
    echo '</pre>';

?>
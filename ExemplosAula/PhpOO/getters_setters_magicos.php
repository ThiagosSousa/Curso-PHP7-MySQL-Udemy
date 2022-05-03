<?php
    
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        
        //Getters e Setters com overloading
        //Set
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        //Get
        function __get($atributo){
            return $this->$atributo;
        }

        
        //métodos
        function resumirCadFunc(){
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s). ';
        }

        function modificarNumFilhos($numFilhos){
            //Finalidade de alterar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->resumirCadFunc();
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<hr />';
    
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    echo $x->resumirCadFunc();
    echo '<br />';
    $x->modificarNumFilhos(5);
    echo $x->resumirCadFunc();
    
?>
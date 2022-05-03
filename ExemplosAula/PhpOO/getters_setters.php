<?php
    
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        
        //Setters
        function setNome($name){
            $this->nome = $name;
        }

        function setNumFilhos($Filhos){
            $this->numFilhos = $Filhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        //Getters
        function getNome() {
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }
        
        //métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s).";
        }

        function modificarNumFilhos($numFilhos){
            //Finalidade de alterar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s).';
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<hr />';
    
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s).';
    echo '<br />';
    $x->modificarNumFilhos(5);
    echo $x->resumirCadFunc();
    
?>
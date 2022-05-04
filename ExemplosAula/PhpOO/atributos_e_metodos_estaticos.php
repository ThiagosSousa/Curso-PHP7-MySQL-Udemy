<?php
    class Exemplo {
        public static $atributo1 = 'Eu sou estático';
        public $atributo2 = "Eu não";

        public static function metodo1(){
            echo 'Eu sou método estático';
        }

        public function metodo2(){
            echo 'Eu não sou método estático';
        }
    }
    /*
    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metodo1();
    */

    echo Exemplo::$atributo2;
    Exemplo::metodo2();

?>
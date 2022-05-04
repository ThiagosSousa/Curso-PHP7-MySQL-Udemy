<?php
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta(){
            echo 'Abrir a porta';
        }
        public function ligar(){
            echo 'Ligar';   
        }

        public function desligar(){
            echo 'Desligar';   
        }
    }

    class Tv implements EquipamentoEletronicoInterface {
        public function trocarCanal(){
            echo 'Trocar canal';
        }
        public function ligar(){
            echo 'Ligar';   
        }

        public function desligar(){
            echo 'Desligar';   
        }
    }

    $x = new Geladeira();
    $y = new Tv();

    //------------------------------------------------------
    
    interface MamiferoInterface {
        public function respirar();
    }
    interface TerrestreInterface {
        public function andar();
    }
    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function respirar(){
            echo 'Respirar';
        }
        public function andar(){
            echo 'Andar';
        }
        public function conversar(){
            echo 'Conversar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'Respirar';
        }
        public function nadar(){
            echo 'Nadar';
        }
        public function esguichar(){
            echo 'Esguichar';
        }
    }

?>
<?php

    interface Veiculo {
        
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);

    }

    abstract class Automovel implements Veiculo{
        public function acelerar($velocidade){
            echo "O veiculo acelerou ate ".$velocidade." Km/h";
        }
        public function freiar($velocidade){
            echo "Frenar ate ".$velocidade." Km/h";
        }
        public function trocarMarcha($marcha){
            echo "Mudar para marcha".$marcha;
        }
    }

    class Delrey extends Automovel {
        public function empurrar(){
            echo "Empurrar o Carro";
        }
    }

    $carro = new Delrey();

    $carro->acelerar(200);
?>
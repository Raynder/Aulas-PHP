<?php

    interface Veiculo {
        
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);

    }

    class Civc implements Veiculo{

    }
?>
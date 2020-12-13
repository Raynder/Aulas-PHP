<?php

    class Doc{

        private $numero;

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getNumero(){
            return $this->numero;
        }
    }

    $cpf = new Doc();

    $cpf->setNumero("12345678909");

    var_dump($cpf->getNumero());

?>
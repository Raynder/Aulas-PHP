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

    class Cpf extends Doc {

        public function validar():bool{
            $numCpf = $this->getNumero();

            if($numCpf < 44444444444){
                return FALSE;
            }
            return TRUE;
        }

    }

    $doc = new Cpf();

    $doc->setNumero(88888888888);

    echo $doc->validar();

?>
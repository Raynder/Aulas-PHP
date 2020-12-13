<?php

    Class Endereco{

        private $rua;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c){
            $this->rua = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){

            var_dump("DESTRUIR");
        }

        public function __toString(){

            return $this->rua." , ".$this->numero." , ".$this->cidade;
        }
    }

    $meu = new Endereco("Jorge Camargo", "2", "Goiania");

    var_dump($meu);

    echo $meu;

    //unset($meu);

?>
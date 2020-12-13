<?php

    class Pessoa {

        public $nome = "Rasmus Lerdof"; //o obj tem acesso sem acesso a func
        protected $idade = 48; //somente as func das classes tem acessos
        private $senha = "123456"; //so a func da class pai tem acesso

        public function ver(){

                echo $this->nome." <br>";
                echo $this->idade." <br>";
                echo $this->senha." <br>";
        }
    }

    class Programador extends Pessoa{
        public function ver(){

            echo get_class($this);

            echo $this->nome." <br>";
            echo $this->idade." <br>";
            echo $this->senha." <br>";
    }
    }

    $obj = new Programador();

    //echo $obj->idade. " <br>";

    $obj->ver();

?>
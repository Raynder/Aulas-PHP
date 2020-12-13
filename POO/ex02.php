<?php

    class Carro {

        private $modelo;
        private $motor;
        private $ano;

        public function getModelo():string{

            return $this->modelo;
        }

        public function getMotor():float{

            return $this->motor;
        }
        
        public function getAno():int{

            return $this->ano;
        }

        public function setModelo($modelo){

            $this->modelo = $modelo;
            
        }

        public function setMotor($motor){

            $this->motor = $motor;

        }

        public function setAno($ano){

            $this->ano = $ano;

        }

        public function exibe(){

            return array (
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }

    }

    $gol = new Carro();

    $gol->setModelo("Gol GT");
    $gol->setMotor("1.5");
    $gol->setAno("2015");

    var_dump($gol->exibe());

?>
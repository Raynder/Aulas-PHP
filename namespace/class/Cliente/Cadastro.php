<?php
    namespace Cliente;

    class Cadastro extends \Cadastro
    {
        public function registrarvenda(){

            echo "Foi registrado uma venda para o cliente ".$this->getNome();

        }
    }
    
<?php
    //O autoload ele nos poupa de fazer um require para cada class que vamos chamar
    //ele pega o objeto que esta sendo chamado e joga na função

    function __autoload($nome){
        require_once("$nome.php");
    }

    //Vamos exemplificar sem incluir a Class Delrey vamos instanciar o objeto e usa-lo
    $carro = new Delrey();
    $carro->acelerar(150);

    //Claro que para isso as clasees, e nome das classes e nome do arquivo teram que ter o mesmo nome
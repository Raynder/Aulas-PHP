<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Raynder Cardoso");
    $cad->setEmail("raynder3@gmail.com");
    $cad->setSenha("123");

    $cad->registrarvenda();

<?php
    //Alem das funcionalidades do autoload, temos tambem o apl_autoload
    //Com ele podemos usar funçoes para procurar em lugares especificos

    //Aqui criamos a função incluir para verificar se existe, e caso exista, fazer um require
    function incluir($nome){
        if(file_exists($nome.".php") == TRUE){
            require_once("$nome.php");
        }
    }

    //Agora usamos ela com spl para ser chamada ao instanciar
    spl_autoload_register("incluir");

    //Faremos a mesma coisa so que criando a função dentro do propio spl
    //Aproveitando e mostrnado como procurar em directorios especificos

    spl_autoload_register(function($nome){
        if(file_exists("Abstract". DIRECTORY_SEPARATOR .$nome.".php") == TRUE){
            require_once("Abstract".DIRECTORY_SEPARATOR."$nome.php");
            //DIRECTORY_SEPARATOR não tem nada haver ele e apenas uma variavel que resulta na barra / ou \ caso nao sabemos
        }
    });


    $carro = new Delrey();
    $carro->acelerar(150);
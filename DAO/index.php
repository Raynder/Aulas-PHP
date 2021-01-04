<?php

    require_once "config.php";


    /* FUNÇÃO QUE TRAS APENAS UM USUARIO
    $user = new Usuario;
    $user->loadById(3);
    */

    /*FUNÇÃO QUE TRAS TODOS OS USUARIOS
    $lista = Usuario::getList();
    echo json_encode($lista);
    */

    /*FUNÇÃO QUE BUSCA LISTA DE USUARIOS POR PELO LOGIN
    $busca = Usuario::search("jo");
    echo json_encode($busca);
    */

    $user = new Usuario;
    $user->login("joe", "12345678");
    echo $user;
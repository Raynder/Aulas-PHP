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

    /*FUNÇÃO QUE INSERE USUARIOS NA TABELA
    $user = new Usuario;
    $user->login("joe", "12345678");
    echo $user;
    */
    
    /*FUNÇÃO QUE ALTERA O USUARIO E SENHA DO LOGIN CARREGADO
    $user->loadById(10);
    $user->update("Kelly","novasenha");
    */

    $user = new Usuario();
    $user->loadById(7);

    $user->delete();
    echo $user;
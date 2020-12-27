<?php

    $db = "dbphp7";
    $host = "localhost";
    $user = "root";
    $pass = "";

    $sql = "DELETE FROM tb_usuarios WHERE idusuario = ?";
    $conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

    // Iniciar uma transação para verificar se seguiremos com ela ou não
    $conn->beginTransaction();

    $id = 2;

    $stmt = $conn->prepare($sql);

    //Neste array ele vera as interrogações na sql e atribuira o valor ordenadamente
    $stmt->execute(array($id));

    // Cancelando a transação
    // $conn->rollback();

    // Validando a transação
    $conn->commit();

    echo("Dados excluidos com sucesso!!");



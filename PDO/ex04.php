<?php

    $db = "dbphp7";
    $host = "localhost";
    $user = "root";
    $pass = "";

    $sql = "UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID";
    $conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

    $login = "jawq";
    $password = "55558888";
    $id = 3;

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindValue(":ID", $id);

    $stmt->execute();

    echo("Dados alterados com sucesso!!");



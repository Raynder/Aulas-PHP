<?php

    $db = "dbphp7";
    $host = "localhost";
    $user = "root";
    $pass = "";

    $sql = "DELETE FROM tb_usuarios WHERE idusuario = :ID";
    $conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

    $id = 5;

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":ID", $id);

    $stmt->execute();

    echo("Dados excluidos com sucesso!!");



<?php

    $db = "dbphp7";
    $host = "localhost";
    $user = "root";
    $pass = "";

    $sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)";
    $conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

    $login = "jose";
    $password = "12345678";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);

    $stmt->execute();

    echo("Dados inseridos com sucesso!!");



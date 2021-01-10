<?php
    require_once "config.php";

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

    //print_r(json_encode($usuarios));
    $headers = array();

    foreach($usuarios[0] as $key => $value){
        array_push($headers, ucfirst($key));
    }

    $file = fopen("usuarios.csv", "w+");

    fwrite($file, implode(",",$headers)."\n\r");

    foreach($usuarios as $row){
        $data = array();
        foreach($row as $key  => $value){
            array_push($data, $value);
        }
        // Fim do foreach das colunas dentro da linha

        fwrite($file, implode(",", $data) . "\r\n");
    }//Fim do foreach das linhas

    fclose($file);
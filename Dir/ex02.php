<?php

$imagens = scandir("imagens");

$data = array();

foreach($imagens as $img){
    if(!in_array($img, array(".", ".."))){
        $filename = "imagens".DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);
        $tam = filesize($filename);

        $info['Tamanho'] = $tam;
        $info["modificada"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/PHP/dir/".str_replace("\\","/",$filename);
        array_push($data, $info);
    }
}

echo json_encode($data);
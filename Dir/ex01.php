<?php

    $name = "imagens";

    if(!is_dir($name)){
        mkdir($name);
        echo "Directorio $name criado com sucesso!";
    }
    else{
        echo "Ja existe o directorio $name, foi removido";
        rmdir($name);
    }
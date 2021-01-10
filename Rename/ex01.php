<?php
    $dir1 = "folder01";
    $dir2 = "folder02";

    if(!is_dir($dir1))
        mkdir($dir1);
    
    if(!is_dir($dir2))
        mkdir($dir2);

    $file = "README.txt";

    if(!file_exists($dir1.DIRECTORY_SEPARATOR.$file)){
        $file = fopen($dir1.DIRECTORY_SEPARATOR.$file, "w+");
        fwrite($file, date("d/m/Y H:i:s"));
        fclose($file);
    }

    rename($dir2.DIRECTORY_SEPARATOR.$file, $dir1.DIRECTORY_SEPARATOR."nometeste.txt");
    echo "Arquivo movido com sucesso!";
<?php

spl_autoload_register(function($nameclass){
    $pastaclass = "class";
    $filename = $pastaclass.DIRECTORY_SEPARATOR.$nameclass.".php";

    if(file_exists($filename)){
        require_once($filename);
    }

});
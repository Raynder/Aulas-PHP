<?php

    $cep = "74354705";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //DIZER QUE DESEJO UMA PESSO
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //NÃO EXIGIR VALIDAÇÃO

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    print_r($data);

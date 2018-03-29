<?php

    $file = fopen('exercicio.csv', 'a+');

    foreach ($_SERVER as $chave => $valor) {
        fwrite($file, $chave.';'.$valor."\n");
    }

    fclose($file);
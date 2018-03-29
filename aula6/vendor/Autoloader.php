<?php

    spl_autoload_register(function ($classe) {

        // DEFINIR O DIRETÓRIO BASE
        $dir = __DIR__ . '/';

        // DEFINIR O NOME DO ARQUIVO A SER INCLUÍDO
        $arquivo = $dir . $classe . '.php';

        // ALTERAR AS BARRAS INVERTIDAS
        $arquivo = str_replace('\\', '/', $arquivo);

        // VERIFICAR SE O ARQUIVO EXISTE
        if (file_exists($arquivo)) {

            // SÓ INCLUIR O ARQUIVO SE ELE EXISTIR (PSR)
            require $arquivo;
        }

    });

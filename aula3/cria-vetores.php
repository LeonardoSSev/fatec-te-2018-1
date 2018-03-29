<?php

    $presidentes = array('FHC', 'Lula', 'Dilma');

    $clubes = ['Palmeiras', 'Corinthians', 'Santos'];

    $tamanho = count($clubes);

    for ($i = 0; $i < $tamanho; $i++) {
        print "<h1>$clubes[$i]</h1>";
    }

    //print $i;

    $cliente = [
        'nome' => 'Leonardo', 
        'cpf'  => '9999',
        'altura' => 1.75
    ];

    var_dump($cliente);
    
    print '<p>'.$cliente['altura'].'</p>';


    $pratos =['macarrão', 'sopa'];

    $pratos[] = 'feijão';
    $pratos[5] = 'arroz';
    $pratos[] = 'bife';
    
    /*print_r($pratos);

    array_pop($pratos);
    echo '<br>';
    print_r($pratos);
    array_pop($pratos);
    echo '<br>';
    print_r($pratos);
    $ovo = 'ovo';
    array_push($pratos, $ovo);
    echo '<br>';*/

    mail('leonardossev@gmail.com', 'Teste', 'Tópicos Especiais');

    print_r($pratos);
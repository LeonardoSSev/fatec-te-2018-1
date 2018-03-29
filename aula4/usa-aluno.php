<?php

    require 'Aluno.php';

    $obj = new Aluno('Leonardo', 1.75);

//    $obj->setNome('Leonardo');
//    $obj->setAltura(1.75);

    $obj->nome = 'Leo';
    $obj->altura = 1.77;

    print "<p>Nome: ".$obj->nome.", Altura:". $obj->altura."</p>";

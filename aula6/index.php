<?php

    require 'vendor/Autoloader.php';
//    require './vendor/academico/Atividade.php';
//    require './vendor/corporativo/Atividade.php';

    use academico\Atividade;
    use corporativo\Atividade as AtividadeCorporativa;

    $obj = new Atividade();

    $obj2 = new AtividadeCorporativa();

    print "<p>Pasta: ".__DIR__."</p>";
    print "<p>Arquivo: ".__FILE__."</p>";

    $vetor = explode("/", __FILE__);

    print "<p>Arquivo: ".end($vetor)."</p>";

    $arquivo = str_replace(__DIR__. '/', '', __FILE__);

    print "<p>Arquivo: $arquivo </p>";

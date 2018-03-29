<?php

$mensagem = "";
foreach ($_POST as $campo => $valor) {
    //print "<p><strong>$campo: </strong><em>$valor</em></p>";
    $mensagem .= "$campo: $valor<br>";
}

mail($_POST['to'], $_POST['subject'], $_POST['message'], 'From:leonardossev@gmail.com');

header('Location: index.php');
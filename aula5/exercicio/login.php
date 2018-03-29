<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include_once './sections/head.php';
    ?>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php
            include_once 'sections/menu.php';
            include_once 'sections/header.php';

            ?>
        </div>
        <hr>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-12 blog-main">
            <div class="blog-post">
                <h1 class="blog-post-title" >Aula 5 - Exercício: Login</h1>
                <?php
                    if (!isset($_SESSION['usuario'])) include_once 'sections/form-autentica.php';
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once './sections/footer.php';
?>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/scripts.js"></script>
</body>
</html>
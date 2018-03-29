<?php

    require './Class/Usuario.php';

    $admin = new Usuario('usuario', '123456');
//    $user1 = new Usuario('user1', '123');
//    $user2 = new Usuario('user2', '123');

    try {
        $admin->name = $_POST['name'];
        $login = $admin->entrar(array($_POST['login'], $_POST['password']));

        if ($login) {
            session_start();
            $_SESSION['usuario'] = $admin;
            header('Location: login.php');
        }

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

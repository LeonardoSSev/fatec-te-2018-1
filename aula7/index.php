<?php

    $portal = new PDO('sqlite:portal.db');

    $comando = $portal->query('SELECT * FROM usuarios');
    $usuarios = $comando->fetchAll();
    
    // EXIBINDO OS REGISTROS DA TABELA usuarios
    
    foreach($usuarios as $usuario) {
        print "<p><strong>Login:</strong> " . $usuario['login'] . " | Senha: ". $usuario['senha'] . "</p>";
    }
    
    $id = $_GET['id'] ?? false;
    
    if ($id) {
        $comando = $portal->prepare('SELECT * FROM usuarios WHERE id=:id');
        $comando->bindParam(':id', $id);
        $comando->execute();
        $usuario = $comando->fetch();
        print "<h2>Login: " . $usuario['login'] . "</h2>";
    }
    
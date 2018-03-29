<?php

    class Usuario
    {
        private $login;
        private $name;
        private $password;

        public function __construct($login, $password)
        {
            $this->login = $login;
            $this->password = $password;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $novoValor)
        {
            $this->$atributo = $novoValor;
        }

        public function entrar($dadosDeLogin):bool
        {
            if ($dadosDeLogin[0] != $this->login || $dadosDeLogin[1] != $this->password) {
                throw new Exception("Credenciais erradas. Por favor, insira as credenciais corretas.");
            }
            return true;
        }

        public function sair():bool
        {
            unset($_SESSION['usuario']);

            if(isset($_SESSION['usuario'])) return true;

            return false;
        }


    }
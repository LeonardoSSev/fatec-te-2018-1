<?php

    class Aluno
    {
        private $nome;
        private $altura;

        public function __construct($nome, $altura)
        {
            $this->nome = $nome;
            $this->altura = $altura;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $newValue)
        {
            $this->$atributo = $newValue;
        }


        public function crescer($tamanho)
        {
            $this->altura = $tamanho;
        }

    }

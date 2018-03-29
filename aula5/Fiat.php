<?php

    class Fiat extends Carro
    {
        private $modelo;

        //CONSTRUTOR COM SOBRECARGA
        public function __construct($modelo, $motor = null)
        {
            $this->modelo = $modelo;
            $this->motor = $motor; //atributo herdado
        }

        public function __get($atributo)
        {
            if ($atributo == 'modelo') return 'Fiat ' . $this->$atributo;

            return parent::__get($atributo);
        }

        public function __set($atributo, $novoValor)
        {
            $this->$atributo = $novoValor;
        }
    }
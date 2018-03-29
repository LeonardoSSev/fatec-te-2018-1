<?php

    class Carro
    {
        protected $motor;

        public static $qtCarros = 0;

        function __construct(float $motor)
        {
            if($motor > 1.0) {
                $this->motor = $motor;
                self::$qtCarros++;
            }
            else {
                throw new Exception("Não é possível definir um motor com menos de 1000 cilindradas");
            }
            $this->motor = $motor;
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        static function verContagem()
        {
            print "<h2>Carros: " . self::$qtCarros . "</h2>";
        }
    }
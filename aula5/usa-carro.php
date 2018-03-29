<?php

    require 'Carro.php';
    require 'Fiat.php';

    try {
        $car01 = new Carro(1.2);
        print "<p>Motor: ". $car01->motor ."</p>";

        //sobrecarga de construtor
        $car02 = new Fiat('Palio');
        $car03 = new Fiat('Strada', 1.6);
        print "<p>Motor: <em>" . $car03->motor . "</em></p>";
        print "<p>Modelo: <em>" . $car03->modelo . "</em></p>";

        Carro::verContagem();
    } catch (Exception $ex) {
        print "<p>Uma exceção ocorreu: [<em>" . $ex->getMessage() . "</em>]</p>";
    } catch (TypeError $te) {
        print "<p>Um erro ocorreu: [<em>" . $te->getMessage() . "</em>]</p>";
    } catch (Error $er) {
        print "<p>Um erro importante ocorreu: [<em>" . $er->getMessage() . "</em>]</p>";
    }
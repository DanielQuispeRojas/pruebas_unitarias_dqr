<?php
namespace App;
Class Calculadora{
    public function sumar($a, $b){
        return $a + $b;
    }

    public function restar($a, $b){
        return $a-$b;
    }

    public function multiplicar($a, $b){
        return $a*$b;
    }

    public function dividir($a, $b){
        if($b==0){
            throw new \Exception("Division entre cero no permitida");
        }
        return $a/$b;
    }

    //nuevas funciones de la semana 8

    public function esPar($n){
        return $n % 2 == 0;
    }

    public function esPositivo($n){
        return $n>0;
    }

    public function esNegativo($n){
        return $n<0;
    }

    public function esCero($n){
        return $n == 0;
    }
}
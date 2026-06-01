<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculadora;

Class CalculadoraTest extends testCase{
    public function testSumar(){
        //ARRANGE
        $calc = new Calculadora();


        //ACT
        $resutlado = $calc->sumar(5,3);

        //ASSERT
        $this->assertEquals(8, $resutlado);
    }

    public function testRestar(){
        $calc = new Calculadora();
        $resultado = $calc->restar(10,4);
        $this->assertEquals(6, $resultado);
    }
}

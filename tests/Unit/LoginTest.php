<?php

//IMPORTAR LOGIC.PHP PARA UTILIZAR SUS FUNCIONES
require_once __DIR__ . '/login/login.php';
//namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $login;

    protected function setUp(): void
    {
        $this->login = new login();
    }

    //TEST
    //PRUEBA PARA SUMAR
    public function testSumar()
    {
        $result = $this->login->suma(2, 3);
        $this->assertEquals(5, $result);
    }

    //PRUEBA PARA RESTAR
    public function testResta()
    {
        $result = $this->login->resta(5, 2);
        $this->assertEquals(3, $result);
    }

    //PRUEBA PARA MULTIPLICAR
    public function testMultiplicacion()
    {
        $result = $this->login->multiplicacion(5, 2);
        $this->assertEquals(10, $result);
    }

    //PRUEBA PARA DIVISION
    public function testDivision()
    {
        $result = $this->login->division(5, 2);
        $this->assertEquals(2.5, $result);
    }

        //prueba para saber que un valor es verdadero
    public function testVerdadero()
    {
        $result = $this->login->verdadero(3, 3);
        $this->assertEquals(true, $result);
    }

    //prueba para saber que un valor es falso
    public function testFalso()
    {
        $result = $this->login->falso(3, 2);
        $this->assertEquals(false, $result);
    }

    //prueba para saber la igualdad
    public function testIgualdad()
    {
        $result = $this->login->igualdad(3, 3);
        $this->assertEquals(true, $result);
    }

    public function testDesigualdad()
    {
        $result = $this->login->desigualdad(3, 2);
        $this->assertEquals(true, $result);
    }

    //Prueba para contabilizar los elementos de un array
    public function testArrayConteo()
    {
    $array = [1, 2, 3, 4, 5]; // creo un array con 5 elementos
    $this->assertCount(5, $array);
    }

    public function testValidarValorNull()
    {
        $value = null; //definir el valor nulo
        $this->assertNull($value);
    }

    public function testValidarValorNoEsNulo()
    {
        $value = 'hola'; //definir el valor no nulo
        $this->assertNotNull($value);
    }

    public function testGreaterThan()
    {
        $value = 10;
        $this->assertGreaterThanOrEqual(5, $value);
    }

    public function testSeaUnaInstanciaSClass()
    {
        $object = new stdClass(); // Crea una instancia de testSClass
        $this->assertInstanceOf(stdClass::class, $object);
    }

    //Comprobar si una cadena de texto termina con la palabra 'mundo'
    public function testCadenaTerminaEnMundo()
    {
        $string = 'Hola, Mundo'; // Definicion de una variable cadena
        $this->assertMatchesRegularExpression('/Mundo$/', $string); // verificamos que la cadena de texto termine en Mundo
    }

    //Prueba para saber si un valor es mayor o igual a 5
    public function testMayorQue()
    {
        $variable = 10; // Definiendo un valor de una variable de tipo int
        $this->assertGreaterThanOrEqual(5, $variable);
    }

    //Prueba para saber si un valor es mayor o igual a 3
    public function testMenorQue()
    {
        $variable = 3; // Definiendo un valor de una variable de tipo int
        $this->assertLessThanOrEqual(5, $variable);
    }














}
?>

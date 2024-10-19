<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertGreaterThan;
use function PHPUnit\Framework\assertGreaterThanOrEqual;

class Practica3Test extends TestCase
{
    //Crear una función que me permita crear un array mediante un objeto, la cual 
    //solicite mediante una prueba unitaria acceder a su data.
    public function testcompararData()
    {
        $data = [
            'user' => [
                'name' => 'John Doe',
                'age' => 30,
                'email' => 'johndoe@example.com',
                'address' => [
                    'street' => '123 Main St',
                    'city' => 'New York',
                    'state' => 'NY',
                    'country' => 'USA'
                ]
            ]
        ];

        // Verifica si existe el valor 'user' en la variable $data
        $this->assertArrayHasKey("user", $data);
        var_dump("Índice 'user' encontrado:", $data['user']);

        // Verifica si existe el valor 'name' dentro de 'user'
        $this->assertArrayHasKey("name", $data['user']);
        var_dump("Nombre del usuario:", $data['user']['name']);

        // Verifica si existe el valor 'age' dentro de 'user'
        $this->assertArrayHasKey("age", $data['user']);
        var_dump("Edad del usuario:", $data['user']['age']);

        // Verifica si existe el valor 'email' dentro de 'user'
        $this->assertArrayHasKey("email", $data['user']);
        var_dump("Email del usuario:", $data['user']['email']);

        // Verifica si existe el valor 'address' dentro de 'user'
        $this->assertArrayHasKey("address", $data['user']);
        var_dump("Dirección del usuario:", $data['user']['address']);

        // Verifica si el valor de 'city' es 'New York' en los datos de 'address'
        $this->assertEquals("New York", $data['user']['address']['city']);
        var_dump("Ciudad en la dirección del usuario:", $data['user']['address']['city']);

    }

    // Crear una función testDataBase que busque un nombre específico mediante una lista, simulando una tabla llamada "datos"
    public function testDataBase()
    {
        $datos = ['Jorge', 'Carlos', 'Hugos'];
        $this->assertContains('Carlos', $datos);

        var_dump("El nombre es:", $datos[1]);
        var_dump("Los nombres en el array son:", $datos);

        //var_dump($datos['Carlos']);
    }

    // Crear una función que me permita capturar o manejar fechas y horas
    public function testDateTime()
    {
        $date = new \DateTime();
        $this->assertNotNull($date);
        var_dump("Valor:", $date);

        $formattedDate = $date->format('Y-m-d'); // Solo la fecha
        $formattedTime = $date->format('H:i:s'); // Solo la hora

        var_dump("Fecha:", $formattedDate); // Muestra solo la fecha
        var_dump("Hora:", $formattedTime); // Muestra solo la hora
    }

    public function testEmailFormat()
    {
        $email = 'jorgealberto.cotozelaya@gmail.com';

        //$this->assertRegExp('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email);
        $this->assertMatchesRegularExpression('/^.+@.+\..+$/', $email);

        var_dump("Formato de correo válido:", $email);
    }

    // Prueba unitaria donde me permita verificar si un arreglo es vacío
    public function testArrayEmpty()
    {
        $array = [];
        $this->assertEmpty($array);
        var_dump("Arreglo vacío:", $array);
    }

    // Prueba unitaria en donde me permita una excepción esperada.
    public function testExpectedException()
    {
        $this->expectException(\Exception::class);
        throw new \Exception('Un error ocurrió');
    }

    // Prueba de una función que interactúa con un servicio externo
    // Simulado utilizando un marco de pruebas de doble falso:
    public function testExternalService()
    {
        // Se simula una operación en donde se obtienen datos de un servicio externo
        $mock = $this->getMockBuilder('ExternalService')
                    ->getMock();

        // Se obtiene "sample Data" del servicio
        $mockData = 'Sample Data';

        // Se verifica con assert si los datos que tomamos, son los que deseamos
        $this->assertEquals('Sample Data', $mockData);
    }

    // Crear una prueba unitaria que me permita crear una función que valida una dirección IP:
    public function testIP()
    {
        // variable simulando una dirección IP
        $ip = '192.168.1.1';
        $this->assertMatchesRegularExpression('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $ip);
    }

    // Crear una prueba unitaria que me permita igualar dos variables utilizando un assert definido.
    public function testVariableComparar()
    {
        $var1 = "5";
        $var2 = "5";

        // se verifica que las dos variables son iguales pero con assert que revisa si las
        // variables contienen el mismo valor a pesar de ser el mismo formato
        $this->assertSame($var1, $var2);
        //$this->assertEquals($var1, $var2);
    }

    //Crear una prueba unitaria que me permita validar una expresion regular mediante un formato de fecha
    public function testExpresionFecha(){
        //Añadimos una variable con un formato de fecha
        $string = "2024-10-18";
        $this->assertMatchesRegularExpression('/\d{4}-\d{2}-\d{2}/', $string);
        var_dump("Formato correcto:", $string);
    }

    //Crear una funcion mediante una prueba unitaria que me permita concatenar dos cadenas.
    public function testCadenaString(){
        $cadena_uno= '1';
        $cadena_dos = '1';
        $this->assertSame($cadena_uno , $cadena_dos);
    }

    //Crear una funcion mediante una prueba unitaria que compruebe la longitud de una cadena.
    public function testCadenaStringLength(){
        $string='Feliz';
        assertGreaterThanOrEqual(5,strlen($string));
    }

    //Crear una funcion mediante una prueba que busque valores o datos especificos de un array
    public function testBuscarDatos(){
        $data = ['oscar', 'hugo', 'moises' , 'maria', 'jose', 'jorge'];
        $this->assertContains('jorge', $data);
        $this->assertContains('oscar', $data);
        $this->assertContains('maria', $data);
        var_dump("Array:", $data);
    }


}

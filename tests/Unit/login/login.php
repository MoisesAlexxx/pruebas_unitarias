<?php
//PRUEBAS UNITARIAS BASICAS DE SENTIDO LOGICO
class login {

//EJERCICIO #1: FUNCION PARA RETORNAR UNA SUMA DE A + B

//SUMA
public function suma($a, $b){
    return $a + $b;
}

//RESTA
public function resta($a, $b){
    return $a - $b;
}

//MULTIPLICACION
public function multiplicacion($a, $b){
    return $a * $b;
}

//DIVISION
public function division($a, $b){
    return $a / $b;
}

//verificar si un valor es true
public function verdadero($valor)
{
    return $valor == true;
}

//verificar si un valor es false
public function falso($valor)
{
    return $valor == false;
}
//prueba para verificar la igualdad de dos valores
public function igualdad($valor1, $valor2)
{
    return $valor1 == $valor2;
}

//prueba para verificar la desigualdad de dos valores
public function desigualdad($valor1, $valor2)
{
    return $valor1 != $valor2;
}

//comprobar si un array tiene un número específico de elementos
public function contarArrar($count, $array)
{
    return count($array) === $count;
}

//comprueba si un valor es nulo
public function verificarValorNull($valor)
{
    return is_null($valor);
}

//comprueba si un valor es mayor o igual al otro
public function GreaterThan($value, $comparar)
{
    return $value >= $comparar;
}

//Comprueba si un objeto es una instancia de una clase específica
public function chequearInstanciaClase($object, $class)
{
    return $object instanceof $class;
}

//Crear una funcion que me permita crear un array mediante un objeto , la cual 
//solicite  mediante una prueba unitaria acceder a su data.


}
?>

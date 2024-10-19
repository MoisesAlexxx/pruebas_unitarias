<?php
 
namespace Tests\Unit;
 
use PHPUnit\Framework\TestCase;
 
class EmailValidadorTest extends TestCase
{
    /**
     * Test para validar una dirección de correo electrónico de Gmail.
     *
     * @return void
     */
    public function testValidadorCorreoGmail()
    {
        $correo = 'jorgealberto.cotozelaya@gmail.com';
        $validar = $this->validadorCorreoGmail($correo);
        $this->assertTrue($validar, "El correo no es válido para Gmail");
    }
 
    /**
     * Función para validar una dirección de correo electrónico de Gmail.
     *
     * @param string $correo
     * @return bool
     */
    public function validadorCorreoGmail($correo)
    {
        // Validar que el correo tenga un formato correcto
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
 
        // Verificar que el dominio sea @gmail.com
        if (!preg_match('/@gmail\.com$/', $correo)) {
            return false;
        }
 
        return true;
    }
}
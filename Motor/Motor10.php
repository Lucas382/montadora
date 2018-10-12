<?php

require_once 'interfaceMotor.php';
/**
 * Description of Motor10
 *
 * @author aluno
 */
class Motor10 implements InterfaceMotor
{
    private $ligado = false;
    private $potencia = 0;
    
    /**
     * Acelera o motor
     * @param integer $potencia
     */
    public function acelerar($potencia) {
        
        $this->potencia = $potencia;
    }
    
    /**
     * Desliga o motor
     */
    public function desligar() {
        
        $this->ligado = false;
    }
    
    /**
     * Liga o motor
     */
    public function ligar() {
        $this->ligado = true;
    }

    
}

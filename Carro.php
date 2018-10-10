<?php

/**
 * Classe base para carros
 * @author Lucas
 * 
 */
class Carro
{
    public $cor;
    private $peso = 1000;
    private $combustivel = "Gasolina";
    private $qtdCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;
    private $potencia = 1.0;
    private $ligado = false;
    private $direcao = "centro";
    
    
    /**
     * Construtor do carro 
     * @param String $cor
     * 
     */
    public function __construct($cor = "Branco") 
    {
        $this->cor = $cor;
        
        
    }
    
    /**
     * Liga o carro 
     */
    public function ligar()
    {
        if($this->qtdCombustivel > 0)
        {
            $this->ligado = true;
        }
        
    }
    
    /**
     * Desliga o carro
     */
    public function desligar()
    {
        
        $this->ligado = false;
    }
    
    /**
     * Acelera o carro 
     */
    public function acelerar($valor)
    {
       
        $this->velocidade = $valor * $this->potencia;
        $this->alimentarCombustivel();
        $this->kilometragem += $this->velocidade;
        
    }
    
    /**
     * Freia o carro 
     */
    public function frear()
    {
        
        $this->acelerar(0);
        
        
    }
    
    /**
     * Abastece o Combustível
     * @param float $qtd Quantidade de combustível em litros
     */
    public function abastecer($qtd)
    {
        $this->qtdCombustivel += $qtd;
        $this->alimentarCombustivel();
        
    }
    
    /**
     * Vira a roda
     * @param String $direcao Valores permitidos: Centro | Direita  | Esquerda
     */
    public function virar($direcao)
    {
        $this->direcao = $direcao;
        
    }
    
    /**
     * Bomba de combustível
     */
    private function alimentarCombustivel()
    {
       if ($this->qtdCombustivel > 0)
        {
        $qtd =  $this->potencia * $this->peso * $this->velocidade;
       
        $this->qtdCombustivel -= $qtd /6000;
       
            }else{
            $this->desligar();   
        
        }
    
    }
}
<?php

abstract class Forma
{
	public $tipoDeForma;
	
	public function imprimeForma()
	{
        $this -> calculaArea();
		echo $this-> tipoDeForma . ' com Área de: '. $this-> calculaArea(). '<hr>';
	}
	abstract public function calculaArea();

}

class Quadrado extends Forma
{
	public $lado;

	public function  __construct (float $varLado)
	{
        $this-> tipoDeForma = 'Quadrado';
		return $this-> lado = $varLado;
	}
    public function calculaArea()

	{
		return $this-> lado * $this-> lado;
	}
}

class Retangulo extends Forma 
{
    public $base;
    public $altura;

    public function __construct ($base, $altura)
    {
        $this-> tipoDeForma = 'Retângulo';
        $this-> base = $base;
        $this-> altura = $altura;
    }

    public function calculaArea()
    {
		return $this-> base * $this-> altura;
	}
}


$obj1 = new Retangulo (2, 50);
$obj1-> imprimeForma();


?>
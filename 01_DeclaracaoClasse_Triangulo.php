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

class Triangulo extends Forma 
{
    public $base;
    public $altura;

    public function __construct ($base, $altura)
    {
        $this-> tipoDeForma = 'Triangulo';
        $this-> base = $base;
        $this-> altura = $altura;
    }

    public function calculaArea()
    {
		return $this-> base * $this-> altura / 2 ;
	}
}

$obj1 = new Triangulo (200, 2);
$obj1-> imprimeForma();


?>
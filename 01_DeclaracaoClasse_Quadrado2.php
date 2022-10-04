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



$obj1 = new Quadrado (100);
$obj1-> imprimeForma();


?>
<?php

abstract class Forma
{
	public $tipoDeForma;
	
	public function imprimeForma()
	{
		echo $this->tipoDeForma;
	}
	abstract public function calculaArea();

}

class Quadrado extends Forma
{
	public $lado;
	public function calculaArea()
	{
		return $this-> lado * $this-> lado;
	}
}

$obj = new Quadrado();
$obj-> tipoDeForma = 'Quadrado';
$obj-> calculaArea();
$obj-> imprimeForma();

?>
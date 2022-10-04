<?php

abstract class Forma
{
	public $tipoDeForma;
	
	public function imprimeForma()
	{
        $this -> calculaArea();
		echo $this-> tipoDeForma . ' com Área de: '. $this-> calculaArea();
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
$obj-> lado = 5;
$obj-> imprimeForma();

?>
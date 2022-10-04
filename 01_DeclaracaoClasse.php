<?php

class Forma
{
	public $tipoDeForma = 'Forma Abstrata';
	
	public function imprimeForma()
	{
		echo $this->tipoDeForma;
	}

}

$obj = new Forma();
$obj-> imprimeForma();

?>
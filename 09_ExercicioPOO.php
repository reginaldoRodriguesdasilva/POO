<?php

abstract class conta 
{
    public $tipoConta;
    public $agencia;
    public $nunConta;
    public $saldo = 0;


    public function deposito($valor)
    {
        $this-> saldo += $valor;       
    }
    public function saque($valor)
    {
        $this-> saldo -= $valor;
    }
    public function imprimeExtrato()
    {
        echo 'Conta '. $this-> tipoConta. ' Agencia: ' . $this-> agencia. ' conta: ' . $this-> nunConta. ' saldo: ' .$this-> calculaSaldo();
    }
    abstract public function calculaSaldo();

}

class poupanca extends conta 
{

    public $reajuste;

    public function __construct (string $agencia, string $nunConta, string $reajuste)
    {
        $this-> tipoConta = 'poupança';
        $this-> agencia = $agencia;
        $this-> nunConta = $nunConta;
        $this-> reajuste = $reajuste;
    }

    public function calculaSaldo()
    {
        return $this-> saldo + ($this-> saldo * $this-> reajuste / 100);
    }
}

class especial extends conta 
{

    public $saldoEspecial;

    public function __construct (string $agencia, string $nunConta, string $saldoEspecial)
    {
        $this-> tipoConta = 'especial';
        $this-> agencia = $agencia;
        $this-> nunConta = $nunConta;
        $this-> saldoEspecial = $saldoEspecial;
    }

    public function calculaSaldo()
    {
        return $this->saldo + $this-> saldoEspecial;
    }
}

$ctaPoup = new poupanca ( '0002-7', '85588-88', 0.54);
$ctaPoup-> deposito(1500);
$ctaPoup-> imprimeExtrato();

echo'<hr>';

$ctaEspecial = new especial ( '0055-2', '7558842', 2300);
$ctaEspecial-> deposito(1500);
$ctaEspecial-> imprimeExtrato();
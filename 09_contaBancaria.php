<?php

abstract class conta 
{
    private $tipoConta;
    public function getTipoConta(){
        return $this-> tipoConta;
    }
    public function setTipoConta(string $tipoConta){
        $this-> tipoConta = $tipoConta;
    }

    public $agencia;
    public $nunConta;
    protected $saldo = 0;


    public function deposito($valor)
    {
        //$this-> saldo += $valor;   
        if ($valor <= 0) 
        {
            echo 'Depósito invalido!!! <br>';
        }   
        else{
            $this-> saldo +=$valor;
            echo 'Depósito realizado com sucesso!! <br>';
            
        }
    }
    public function saque($valor)
    {
        //$this-> saldo -= $valor;
        if( $this-> saldo >= $valor)
        {
            $this-> saldo -= $valor;
            echo ' Saque realizado com sucesso ';
        }
        else
        {
           echo ' Saldo insuficiente!!! <br>';
        }
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
        $this-> setTipoConta  ('poupança');
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
        $this-> setTipoConta  ('especial');
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
//$ctaPoup-> saque = - 1500;
// Não pode acessar atributo protegido
$ctaPoup-> deposito ( -1500);
$ctaPoup-> saque (3000);
$ctaPoup-> imprimeExtrato();

echo'<hr>';

$ctaEspecial = new especial ( '0055-2', '7558842', 2300);
$ctaEspecial-> deposito(1500);
$ctaEspecial-> imprimeExtrato();
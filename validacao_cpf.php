<?php

abstract class Documento
{

    protected $numero;

    abstract public function eValido();
    abstract public function formata();

    public function setNumero($numero){
        $this -> numero = preg_replace( '/[^0-9]/', '',$numero);
    }

    public function getNumero(){
        return $this-> numero;
    }
    
}

class cpf extends Documento
{
    public function __construct( $numero){
        $this -> setNumero($numero);
    }
    public function eValido(){

    }

    public function formata(){
        //formado do cpf: ###.###.###-##
        return substr($this-> numero, 0, 3). '.' .
               substr($this-> numero, 3, 3). '.' .
               substr($this-> numero, 6, 3). '-'.
               substr($this-> numero, 9, 2);

    }
}

class cnpj extends Documento
{
    public function __construct($numero){
        $this -> setNumero($numero);
    }
    public function eValido(){

    }
    
    public function formata(){

    }
}
class cnh extends Documento
{
    private $categoria;

    public function __construct($numero, $categoria){
        $this -> SetNumero($numero);
        $this -> categoria = $categoria;
    }
    

    public function eValido(){

    }
    
    public function formata(){

    }

    public function setCategoria($categoria){
        $this-> categoria = $categoria;
    }

    public function getCategoria(){
        return $this-> categoria;
    }
}

    $cpf = new cpf('115.858.758-88');
    echo $cpf-> formata();

   
    $cpf-> setNumero('226.325.365-58');

    echo '<hr>';
    
    echo $cpf-> getNumero();

    echo '<hr>';

    $cnpjSenac = new cnpj('03.709.814/0025-65');
    echo $cnpjSenac-> getNumero();

    echo '<hr>';

    $cnhFulano = new cnh('1255656', 'AB');
    echo $cnhFulano-> getNumero() . ' cat.: '. $cnhFulano-> getCategoria();
?>
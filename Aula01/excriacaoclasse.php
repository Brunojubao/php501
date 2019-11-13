<?php

class Cachorro{

    //definicão de atributos
    public $nome = "Rex";
    public $idade = 13;

    //definição de métodos
    public function mostraIdade(){
        echo $idade;
    }
    public function moatraNome(){
        echo $nome;
    }
    public function late(){
        echo "AU AU AU AU";
    }
}
$objeto = new Cachorro();

$objeto-> mostraIdade();

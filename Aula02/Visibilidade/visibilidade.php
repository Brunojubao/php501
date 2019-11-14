<?php

class MinhaClasse{

    public function __construct(){

    }
    public function MeuPublico()
    {}
    protected function MeuProtegido()
    {}
    private function MeuPrivado()
    {}
    
        //Quando não passo visibilidade -> public
        Function foo(){
            $this->MeuPublico();
            $this->MeuProtegido();
            $this->MeuPrivado();
        }
}

$obj = new MinhaClasse();
$obj->MeuPublico();
$obj->MeuPrivado();
$obj->MeuProtegido();
$obj->foo();



Class MinhaClasse2 extends MinhaClasse{
    function Foo2(){
        $this->MeuPublico();
        $this->MeuProtegico();
        $this->MeuPrivado();
    }
}

$obj2 = new MinhaClasse2;
$obj2->MeuPublico();
$obj2->MeuPrivado();
$obj2->MeuProtegido();
$obj2->foo();
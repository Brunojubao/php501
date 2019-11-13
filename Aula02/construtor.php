<?php

class Profissao{
    //ctrl+shift+i Formatar segundo psr2
    public $salario;
    public $cargo;
    public $tempoDeCasa;

    /**
     * Classe construtora
     */

     public function __construct( $cargo ){
         echo $cargo ."Criado com Sucesso!!";
     }
     public function __destruct(){
         echo "objeto sendo destruido";
     }
}
echo "<pre>";
$pedreiro = new Profissao('Pedreiro');
echo "<br>";
var_dump($pedreiro);
unset($pedreiro);
var_dump($pedreiro);

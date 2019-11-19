<?php

require_once "objetoInterface.php";

class Exercicio implements objeto
{
    public function __toString()
    {
        echo "Estou sendo convertido para string";
    }

    public function __invoke()
    {   
        echo "Estou sendo chamado como método";
    }

    public function __set($parametro, $valor)
    {
        echo "Atribuindo a variavel {$parametro} {$valor}";
    }

    public function __get($parametro)
    {
        echo "Acessando o atributo {$parametro}";
    }

    public function __call($metodo, $valores)
    {
        echo "Chamando  {$metodo}";
    }

    public static function __callStatic($metodo, $valores)
    {
        echo "Chamando  {$metodo}";
    }

    public function metodo()
    {
        //Não funciona
    }
}

$obj = new Exercicio;

$obj->metodo();

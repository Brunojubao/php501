<?php

class Testemetodo
{
    public function __call(string $metodo, array $args)
    {
        if(method_exists(__CLASS__,$metodo)){
            echo "Chamando o metodo {$metodo} </br>";
            return $this->$metodo(implode($args));
        }else{
            echo "Não foi possivel acessar {$metodo} </br>";
            echo "Verifique se o mesmo existe </br>";
        }
    }
    public static function __callStatic(string $metodo, array $args)
    {
        if(method_exists(__CLASS__,$metodo)){
            echo "Chamando o metodo {$metodo} </br>";
            return self::$metodo(implode($args));
        }else{
            echo "Não foi possivel na classe {$metodo} </br>";
            echo "Verifique se o mesmo existe </br>";
        }
    }
    public static function mostraMensagem()
    {
        echo "Função em execução";
    }
}

$obj = new TesteMetodo;

$obj->mostraMensagem();
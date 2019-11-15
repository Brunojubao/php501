<?php

class Funcionario
{
    public function oi(){
        echo "Olá<br>";
    }
    public function __destruct(){
        echo "Estou morrendo finalmente...<br>";
    }
    public function __sleep(){
        return ['nome','cargo'];
    }
    public function __wakeup(){
        echo "Morri não, pegadinha do malandro<br>";
        $this->sobrenome = 'Atribuido com o wake up';
    }
}

$funcionario = new Funcionario;

$funcionario->nome = 'Joaquim josé';
$funcionario->sobreome = 'da Silva Xavier';
$funcionario->dataNascimento = '1746-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = 'Morte';
$funcionario->setor = 'Funerário';

echo "<pre>";

var_dump($funcionario);

echo serialize($funcionario);

$serializado = serialize($funcionario);

unset($funcionario);

$funcionario = unserialize($serializado);

$funcionario->oi();

var_dump($funcionario);
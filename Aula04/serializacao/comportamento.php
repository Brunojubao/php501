<?php

class VirarString
{
    public function __construct($mensagem)
    {
        $this->foo = $mensagem;
    }
    public function __toString()
    {
        return "Eae irmão, quero virar string não";
    }
    public function __invoke(){
        echo '<br>4 Dias de curso e não aprendeu ainda??';
    }
}

$obj = new VirarString('Oi');
echo $obj;
$obj(34);
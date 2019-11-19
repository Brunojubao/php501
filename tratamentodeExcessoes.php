<?php

class TesteException
{
    public function mensagem( int $msg): string
    {
        if (empty($mgs)) {
            throw new Exception("Parametro mensagm obrigatório", 500);
        }
        return $msg;
    }
}

$obj = new TesteException;

try {
    echo $obj->mensagem();
} catch (Exception $e) {
    echo "Mensagem é um parametro obrigatório";
} finally {
    echo "<br>Fim da execução<br>";
}

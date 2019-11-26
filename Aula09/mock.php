<?php


use PHPUnit\Framework\TestCase;

class AlgumaClasse
{
    public function fazAlgo()
    {
        //Função a implementar
    }
    public function RetornaNumero()
    {
        //Função a implementar
    }
}

class Mock extends TestCase
{
    public function testMock(){
        $duble = $this->createMock(AlgumaClasse::class);

        $duble->method('FezAlgo')
            ->willReturn('foo');

        $duble->method('RetornaNumero')
            ->willReturn(5);

        $this->assertSame('foo', $duble->fazAlgo(),"Não fez algo");
        $this->assertEquals(5,$duble->RetornaNumero());
    }
}
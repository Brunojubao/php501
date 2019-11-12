<?php

/**
 * Classe, métodos e atributos
 */

 class NomeDaClasse{
     /**
      * Atributos
      */
      public $atributo1 = 1;

      private $atributo2;

      protected $atributo3;

      const ATRIBUTOCONSTANTE = 'x';

      /**
       * Métodos
       */

       public function metodoDaClasse() {
           echo "Sou um método!!!";
       }
}

//Instância de um objeto
$objeto = new NomeDaClasse();

$objeto->metodoDaClasse();
<?php 

namespace Alura\Banco\Modelo\Funcionarios;

class EditorVideo extends Funcionario
{
   public function calculaBonificacao(): float
   {
       return 600.0;
   }
};
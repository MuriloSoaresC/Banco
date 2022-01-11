<?php 

namespace Alura\Banco\Modelo;

trait AcessoPropiredades
{
    public function __get(string $nomeAtributo)
    {
      $metodo = 'recupera' . ucfirst($nomeAtributo);
      return $this->$metodo();  
    }
}
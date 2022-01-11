<?php 

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperasalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
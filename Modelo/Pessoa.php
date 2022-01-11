<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa{

    use AcessoPropiredades;

    protected $nome;
    private $cpf;
   

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;      
    }

    public function recuperaNome(): string{
        return $this->nome;
    }

    public function recuperaCpf(): string{
        return $this->CPF->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
	{
		if (strlen($nomeTitular) < 5) {
			echo "Nome precisa ter pelo menos 5 caracteres";
			exit();
		}
	}
}
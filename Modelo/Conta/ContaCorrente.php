<?php 

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function PercentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
	{
		if ($valorATransferir > $this->saldo) {
			Echo "Saldo Indisponível";
			return;
		}

		$this->sacar($valorATransferir);
		$contaDestino->depositar($valorATransferir);
	}
}
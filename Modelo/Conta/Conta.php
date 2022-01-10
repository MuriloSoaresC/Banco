<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
	private $titular;
	private $saldo;
	private static $numeroDeContas = 0;

	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;

		self::$numeroDeContas++;


	}

	public function __destruct()
	{
		self::$numeroDeContas--;
	}

	public function sacar(float $valorASacar): void {
		$tarifaSaque = $valorASacar * $this->percentualTarifa();
		$valorSaque = $valorASacar + $tarifaSaque;
		if ($valorSaque > $this->saldo) {
			echo "Saldo indisponível" . PHP_EOL;
			return;
		} 
			$this->saldo -= $valorSaque;
		

	}

	public function depositar(float $valorADepositar): void 
	{
		if ($valorADepositar < 0) {
			echo "O valor precisa ser positvo";
			return;
		} 
			$this->saldo += $valorADepositar;
		
	}

	

	public function recuperarSaldo(): float
	{
		return $this->saldo;
	}

	public function recuperaNomeTitular(): string{
		return $this->titular->recuperaNome();
	}

	public function recuperaCpfTitular(): string{
		return $this->titular->recuperaCpf();
	}

	public static function recuperaNumeroDeContas(): int
	{
		return self::$numeroDeContas;
	}

	abstract protected function PercentualTarifa(): float;

	
}
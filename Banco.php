<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco($cidade = 'Petrópolis', $bairro = 'Um Bairro', $rua = 'Minha Rua', $numero = '71B');
$Vinicius = new Titular(new CPF($numero =  '123.456.789-10'), $nome = 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($Vinicius);
$primeiraConta->depositar($valorADepositar = 500);
$primeiraConta->sacar($valorASacar = 300);
var_dump($primeiraConta);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta::recuperaNumeroDeContas();
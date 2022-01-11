<?php 

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionarios\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Pedro da Silva', new CPF('587.689.278.19'), 10000);

$autenticador->tentalogin($umDiretor, '4321');
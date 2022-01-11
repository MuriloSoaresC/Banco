<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionarios\{Gerente, Diretor, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia Dias',
    new CPF('587.627.201-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('587.687.974-58'),
    5000

);

$umEditor = new EditorVideo('Juliana',
 new CPF('498.358.748-90'),
  1500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);
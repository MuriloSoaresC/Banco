<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
         'Paulo Assis', 
         new Endereco('Petrópolis', 'bairro teste', 'Rua Lá', '37')
         )
    );
    $conta->depositar(500);
    $conta->sacar(100);

    echo $conta->recuperarSaldo();

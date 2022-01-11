<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
         'Paulo Assis', 
         new Endereco('Petrópolis', 'bairro teste', 'Rua Lá', '37')
         )
    );
    $conta->depositar(500);
    $conta->sacar(100);

    echo $conta->recuperarSaldo();

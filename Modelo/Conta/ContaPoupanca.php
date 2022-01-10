<?php 

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
         
protected function PercentualTarifa(): float
{
    return 0.03;
}  
        
    
}
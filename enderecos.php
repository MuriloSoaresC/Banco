<?php 

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Rio', 'Um Bairro', 'Uma Rua', 25);
$enderecoDois = new Endereco('São Paulo', 'Bairro Dois', 'Rua Tal', 57);

echo $umEndereco . PHP_EOL;
echo $enderecoDois;
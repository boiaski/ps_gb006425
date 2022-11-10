<?php

use Petshop\Model\Cliente;
use Petshop\Model\Dica;
use Petshop\Model\Produto;

require_once __DIR__ . '/../vendor/autoload.php';

$dica = new Dica();
$dica->loadById(3);
$dica->titulo = 'Alteração Título';
$dica->descricao = 'Nova descrição';
$dica->save();

echo $dica->iddica . PHP_EOL;
echo $dica->titulo . PHP_EOL;
echo $dica->descricao . PHP_EOL;
echo $dica->created_at . PHP_EOL;
echo $dica->updated_at . PHP_EOL;
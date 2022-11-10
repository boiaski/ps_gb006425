<?php

use Petshop\Model\Cliente;
use Petshop\Model\Dica;
use Petshop\Model\Produto;

require_once __DIR__ . '/../vendor/autoload.php';

$dica = new Dica();
$dica->find([]);
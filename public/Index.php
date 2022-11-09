<?php


use Petshop\Model\Produto;

require_once __DIR__ . '/../vendor/autoload.php';

$produto = new Produto();
var_dump($produto->getTableInfo());
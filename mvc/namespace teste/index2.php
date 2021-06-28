<?php
require 'classe/produto.php';
require 'models/produto.php';

$produto = new \clase\Produto();
$produto->mostrarDetalhes();
echo "<br>";
$produto2 = new \models\Produto();
$produto2->mostrarDetalhes();
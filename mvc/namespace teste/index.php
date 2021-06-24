<?php
require 'classe/produto.php';
require 'models/produto.php';

use clase\Produto as ProductClass;
use models\Produto as ProductModels;
$produto = new ProductClass();
$produto->mostrarDetalhes();
echo "<br>";
$produto2 = new ProductModels();
$produto2->mostrarDetalhes();
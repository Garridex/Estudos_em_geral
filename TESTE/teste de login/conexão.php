<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'login');

$conexão = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não consegui me conectar');
if(!isset($conexão)){
    echo "não consegui me conectar";
}else{
    echo "conexão estabelecida";
}

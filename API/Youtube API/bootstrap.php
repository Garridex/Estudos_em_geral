<?php


ini_set(varname: 'display_errors' , newvalue: 1);
ini_set(varname: 'display_startup_errors', newvalue: 1);
error_reporting(level: E_ERROR);


//MYSQL
 define(HOST, 'localhost');
 define(BANCO, 'api');
 define(USER, 'root');
 define(SENHA, 'root');

//autoload
 define(DS, DIRECTORY_SEPARATOR);
 define(DIR_APP, 'api');
//incluindo arquivos para autoload
if (file_exists(filename: 'autoload.php')){
    include 'autoload.php';
}else{
    echo 'Erro ao incluir o bootstrap'; exit;
}
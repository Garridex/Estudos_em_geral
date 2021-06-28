<?php
 include("conexão.php"); 
 if(empty($_POST('email')) ||empty($_POST['senha'])){
header('location:index.php');
exit();
 }
$email = mysqli_real_escape_string($conexão, $_POST['email']);
$senha = mysqli_real_escape_string($conexão,$_POST['senha']);

$query = "select * from usuario where email = '{$email}' and senha = md5('{$senha}')";


echo $query;
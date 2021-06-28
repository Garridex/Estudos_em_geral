<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $color = "vermelho";
echo "Meu carro é " .$color . "<br>"; //certo, igual a declaração da variavel
echo "Meu carro é" .$cOlor . "<br>"; //errado pois a váriavel não está igual declarada
echo "Meu carro é " . $COLOR . "<br>";//errado pois a váriavel não está igual declarada
?>
</body>
</html>
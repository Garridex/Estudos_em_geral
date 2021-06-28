<?php
$x = 5; //escopo global
function myTeste(){
    echo "<p> Variavel x dentro da função é : $x </p>";
//essa váriavel x não pode ser usada aqui dentro
}
myTeste();

echo "<p>Variavel fora da função é : $x</p>";
?>
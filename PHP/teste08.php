<?php
$x = 5;
$y = 10;
function myTeste(){
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];  

}
MyTeste();
echo "O resultado da função soma utilizando array é: ". $y;
?>
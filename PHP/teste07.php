<?php
$x = 5;
$y = 10;
function myTeste(){
    global $x, $y;
    $y = $x + $y;
}
MyTeste();
echo "O resultado da soma feita na função é:" .$y; //retorna 15
?>
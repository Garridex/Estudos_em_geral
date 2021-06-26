<?php
function myTeste(){
static $x = 0;
echo $x;
$x++;
}
MyTeste();
MyTeste();
MyTeste();
?>
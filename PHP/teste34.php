<?php
function add_cinco(&$valor){
    $valor += 5; 
}
$nume = 2;
echo "$nume <br>"; 
add_cinco($nume);
echo $nume;
?>
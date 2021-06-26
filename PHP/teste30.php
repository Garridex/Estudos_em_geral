<?php declare(strict_types=1);
function setHeight(int $meupeso = 50){
echo "Meu peso é: $meupeso <br>";
}
setHeight(92);
setHeight(); //retorna para o valor padrão 50
setHeight(93);
setHeight(85);
?>
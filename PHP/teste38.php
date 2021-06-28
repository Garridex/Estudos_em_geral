<?php
echo $_SERVER['PHP_SELF'];//retorna o nome do arquivo do atual script em execução
echo "<br>";
echo $_SERVER['SERVER_NAME'];//retorna o nome do servidor host
echo "<br>";
echo $_SERVER['HTTP_HOST']; //retorna o cabeçalho Host da solicitação atual
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//retorna a url completa da página atual
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//retorna o caminho do script atual
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];//retorna o valor dado no arquivo de configuração do servidor web
?>  
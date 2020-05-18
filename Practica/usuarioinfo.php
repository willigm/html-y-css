<?php
@$mi_ip=getenv(REMOTE_ADDR);
echo "TU dirección ip es :".$mi_ip;
echo "<br>";
$minavegador= $_SERVER["HTTP_USER_AGENT"];

echo "TU SISTEMA OPERATIVO Y TU NAVEGADOR ES :".$minavegador


?>
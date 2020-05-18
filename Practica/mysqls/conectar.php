<?php
//se pone el servidor,usuario,contraseña

$conexion= mysql_connect("localhost", "root", "");
$sql="create database prueba ;";
if(!$conexion){
    die ("fallo al conectar ".mysql_error());
}
if(mysql_query($sql,$conexion)){
    echo "se ha creado la base de datos :v";
}else{
    echo "no se hsa podido crear la base de datos por el sig error ";
}
mysql_close($conexion);



?>
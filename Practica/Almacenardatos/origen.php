<?php
session_start();

$_SESSION["variable"]="Hola :q tal este texto esta en origen.php";
echo "Hola soy el origen <br><a href='destino.php'>ir al sitio</a>";
?>
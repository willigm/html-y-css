<?php

function saludo(){

    echo "Hola soy una función <br> me estas llamando 
    Gracias !! <br> willipro";
}

saludo();

//Tabla de multiplicar del 0 al 12
echo "<br>";
function Multiplicando($numero1){
    for($numero=0;$numero<=12;$numero++){
 echo $numero1." x ".$numero."= ".$numero1*$numero."<br>";

    }
}

for ($i=0; $i <10 ; $i++) { 
    echo "Tabla de Multiplicar del ".$i."<br>";
   Multiplicando($i);
}
?>
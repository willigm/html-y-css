<?php
//uso de if
$NUMERO=1;
$NUMERO2=1;
if($NUMERO==$NUMERO2){
    echo "Los numeros son identicos ";
}
    else{
        echo "Los numeros son diferentes";
    }
    echo "<br>";

    //uso de for
    for($NUMERO;$NUMERO<15;$NUMERO++){
  echo "esta es la ".$NUMERO."  vez q paso por el bucle for";
echo "<br>";
    }
    echo "bucle finalizado";
//uso de switch
echo "<br>";
$variable=2;
switch($variable){
    case (1):
    echo "hola buenas tardes xd ";
    break;
    case (2):
    echo"hola buenas noches :v";
    break;
}
//uso de while
echo "<br>";
$a=1;
while ($a <= 10) {
  echo $a."Hola <br>";
  $a++;
}
//uso de do while
echo "<br>";
$b=1;
do{
    echo "hola estoy en do while";
}while ($b > 2) ;
echo "<br>";
    echo"bucle finalizado";
   
    echo "<br>";
    //uso de go to

    goto marca;

    echo "este texto me lo salto";

    marca:
    echo "Este texto te lo muestro";
    echo "<br>";
    //uso de foreach

    $elementos=array("CARRO","MOTO","BICICLETA","AVIÓN");

    foreach ($elementos as $valor => $value) {
       echo $value."<br>";
    }


?>
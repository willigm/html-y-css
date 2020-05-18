<?php
$fruta[0]="Manzana";
$fruta[1]="Pera";
$fruta[2]="Uva";
$fruta[3]="Mango";
//reccoriendo el arreglo con foreach
foreach ($fruta as $key => $value) {
   echo " ".$value."<br>";
}

//matriz multidimensional

$agenda[0]["Nombre"]="William";
$agenda[0]["Apellido"]="Guzman";
$agenda[0]["edad"]="20";

$agenda[1]['Nombre']="Martha";
$agenda[1]['Apellido']="Fitoria";
$agenda[1]['edad']="43";

$agenda[2]['Nombre']="Josue";
$agenda[2]['Apellido']="Reyes";
$agenda[2]['edad']="21";

//imprimimos la tabla
for ($i=0;  $i<3 ; $i++) { 
    
echo
'<table border=0.5 width=350px>
<td>
<th>Nombres</th>
<td>
'.$agenda[$i]['Nombre'].'
</td>
</td>
<td>
<th>Apellidos</th>
<td>
'.$agenda[$i]['Apellido'].'
</td>
</td>
<td>
<th>Edad</th>
<td>
'.$agenda[$i]['edad'].'
</td>
</td>
</table>';
}

?>
<?php
//ver dia actual
echo "Fecha Actual : <br>";
echo date("l/");
//ver mes actual
echo date("F/");
//VER AÑO
echo date("Y");
echo "<br>";
//hora
echo "hora actual:<br>";
echo date("g");
echo date(":i");
echo date(":s");
echo date(":u");

echo "<br>";
echo "Hoy es ".date("l").", ".date("j")." de ".date("F")." De ".date("Y");
echo "<br>";
echo "FEHA EN CASTELLANO: ";

function damefecha(){
switch (date("l")) {
    case 'Monday':
        $dia="Lunes ";
        break;
        case 'Tuesday':
        $dia="Martes ";
        break;
        case 'Wednesday':
        $dia="Miercoles";
        break;
        case 'Thrusday':
        $dia="Jueves ";
        break;
        case 'Friday':
        $dia="Viernes ";
        break;
        case 'Saturday':
        $dia="sabado";
        break;
        case 'Sunday':
        $dia="Domingo";
        break;
       
        
}
switch(date("F")){
    case "January":
    $mes="Enero";
    break;
    case "February":
    $mes="Febrero";
    break;
    case "March":
    $mes="Marzo";
    break;
    case "April":
    $mes="Abril";
    break;
    case "May":
    $mes="Mayo";
    break;
    case "Jun":
    $mes="Junio";
    break;
    case "July":
    $mes="Julio";
    break;
    case "Agost":
    $mes="Agosto";
    break;
    case "September":
    $mes="Septiembre";
    break;
    case "October":
    $mes="Octubre";
    break;
    case "November":
    $mes="Noviembre";
    break;
    case "December":
    $mes="Diciembre";
    break;

}
echo "Hoy es ".$dia.", ".date("j")." de ".$mes." De ".date("Y");
}
damefecha();
?>
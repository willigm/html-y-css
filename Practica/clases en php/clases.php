<?php

class miprimerclase{
    //declarando una variable
var $variable1;
var $variable2;

//declarando un metodo vacio
function miprimerclase(){}
function metodo(){
echo "<br>Yo te saludo gracias por llamarme ";

}
//declarando un metodo q recibe parametro
function miprimerclase1($parametro1){
    $this->variable1=$parametro1;
echo "lo que te voy a decir es : ".$this->variable1;
}

}//termina la clase 
//hago una instancia de la clase
$decir=new miprimerclase();
//llamo el metodo en la clase instanciada
$inst=$decir->miprimerclase1("hola xd");
$instancia=new miprimerclase();
$ins=$instancia->metodo();

//aplicando herencia creo una clase hija subclase
//que hereda de miprimerclase
//la cual esta puede tener nuevos atributos y metodos

class subclase extends miprimerclase{
var $atribut1;
function subclase(){}

}
echo "<br>";
//aqui estoy creando una instancia de la subclase
$instancia1=new subclase();
//aqui llamo al metodo heredado de la clase miprimerclase
$insts=$instancia1->metodo();

?>
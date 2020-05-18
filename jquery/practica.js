
/*codigo jquery*/ 
let primero=$(".primero");
primero.css("background-color","purple");
primero.css("color","pink");
let resaltado=$(".resaltado");
resaltado.css("width","200px");
let tercero=$("#tercero");
tercero.css("border","2px solid orange");

let cambiarimagen=$("#btncambiar");
cambiarimagen.on("click",function(){
$("#img-1").attr("src","imagenes/background3.jpg");
});
let desv=$(".desvanecer");
desv.css("width","100");
desv.css("height","80");
desv.css("background","green");
let btn4=$(".btndesv");
/* desparece el cuadro */
btn4.on("click",function(){
$(".desvanecer").fadeOut(1800,function(){

});
});
/* vuelvo aparecer el cuadro*/
btn4.on("click",function(){
    $(".desvanecer").fadeToggle(500,function(){
    
    });
    });

$(document).ready(function(){
let btn=$(".btnclick");
btn4.click(function(){
$(".desvanecer").animate({width : '400px',height:'50px'},2000);

});
let btn2=$(".btndobleclick");
btn2.dblclick(function(){
alert("usted ha hecho doble click ")
});
let btn3=$(".btnmouseover");
btn3.mouseover(function(){
alert("usted ha pasado el mouse por encima el boton");
});
$("input").keypress(function(event){
    if(event.which===13){

        alert("se presiono la tecla enter");
    }

});
});


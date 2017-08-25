/**
 * Created by Susana on 8/3/2017.
 */


    /*Agregando saltos de lineas y comillas en un alert*/
// var mensaje = "¡Hola Mundo!\n Qué fácil es incluis \'comillas simples\'\n y \"comillas dobles\"";

// alert(mensaje);
// alert("Soy el segundo alert :)");

    /*Arreglos*/
// var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
             // "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    /*Imprimir un arreglo con un while*/
// var i=0;
// while (i<=11){
//    alert(meses[i]);
//    ++i;
//}

    /*hide & show with button*/
$("#button-a").click(function(evento){
    $('#div-button').html('Has hecho clic en el botón <b>A</b>') });
$("#button-b").click(function(evento){
    $('#div-button').html('Recibido un clic en el botón <b>B</b>') });


    /*Código Javascript con jQuery que defina los eventos del usuario,
    para cuando sitúa el ratón dentro o fuera de la primera capa:*/

    $("#capa").mouseenter(function(evento){
        $("#mensaje").css("display", "block"); });
    $("#capa").mouseleave(function(evento){
        $("#mensaje").css("display", "none"); });

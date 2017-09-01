/**
 * Created by Susana on 8/31/2017.
 */

$(document).ready(function(){
    /*hide & show with button*/
    $("#button-a").click(function(evento){
        $('#div-button').html('Has hecho clic en el botón <b>A</b>') });
    $("#button-b").click(function(evento){
        $('#div-button').html('Recibido un clic en el botón <b>B</b>') });


    /*Oculta o muestra un elemento
     posicionando el raton en otro elemento.*/
    $("#capa").mouseenter(function(evento){
        $("#mensaje").css("display", "block"); });
    $("#capa").mouseleave(function(evento){
        $("#mensaje").css("display", "none"); });

    /*oculta o muestra un elemento con un swich*/
    $("#mayoria_edad").click(function(evento){
        if ($("#mayoria_edad").attr("checked")){
            $("#formulariomayores").css("display", "block"); }
        else{ $("#formulariomayores").css("display", "none"); } });

    /*Quitar o poner una clase css posicionando el raton en un elemento.*/
    $("#a-exa").mouseover(function(event){
        $("#ejemplo3").removeClass("examples"); });
    $("#a-exa").mouseout(function(event){
        $("#ejemplo3").addClass("examples"); });

});



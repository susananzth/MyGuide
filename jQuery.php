<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
<section class="padd2">
    <h4>Usando jQuery</h4>
    <div class="">
        <h4 class="title text-center">Hide and show elements | Ocultar y mostrar elementos</h4>
        <div class="padd2">
            <h6>Modificar html en un div con botones</h6>
            <p>
                Ddonde tenemos dos botones y un texto. Al pulsar un botón,
                cambiaremos el texto y al pulsar el otro pondremos otro texto distinto:
            </p>
            <div id="div-button" class="exam-js">
                Haz clic en un botón</div>
            <div class="text-center">
                <input id="button-a" type="button" value="Botón A" class="bttn">
                <input id="button-b" type="button" value="Botón B" class="bttn">
            </div>
        </div>
        <div class="padd2">
            <h6>Mostrar y ocultar un div enfocando un elemento</h6>
            <p>
                Ahora vamos a tener dos capas en nuestra página. Una capa estará
                siempre visible y otra capa aparecerá inicialmente oculta y la vamos a mostrar u
                ocultar dependiendo de si el usuario coloca el ratón encima de la capa que
                está siempre visible:
            </p>
            <div id="capa" class="exam-js">
                Pon el ratón encima de esta capa</div>
            <div id="mensaje" style="display: none;" class="exam-js">
                Has puesto el ratón encima!! <br>
                (Ahora quítalo de la capa)</div>
        </div>
        <div class="padd2">
            <h6>Mostrar u ocultar un div con un swich</h6>
            <form>
                Nombre: <input type="text" name="nombre">
                <br>
                <input type="checkbox" name="mayor_edad" value="1" id="mayoria_edad">
                Soy mayor de edad
                <br>
                <div id="formulariomayores" style="display: none;">
                    Dato para mayores de edad: <input type="text" name="mayores_edad">
                </div>
            </form>
            <p>
                Dónde:
                Estas líneas sirven para especificar eventos.
                -$(document).ready(): se hace para lanzar instrucciones cuando el
                navegador está preparado para recibirlas.
                -$("#mayoria_edad").click(): sirve para realizar acciones cuando
                ha hecho clic sobre el #elemento con id "mayoria_edad", que es el
                checkbox del formulario.
                -attr(): método para comprobar el estado del atributo "checked"
                del elemento "#mayoria_edad".
                -Entonces, si estaba "checked", se ejecuta el css que muestrar
                el elemento y si no ejecuta el css que lo oculta.
            </p>

        </div>
        <div class="padd2">
            <h6>Cambiar clases css enfocando un elemento</h6>
            <p>
                Donde:<br>
                <b>mouseover</b>: cuando el usuario coloca el puntero del ratón sobre el
                enlace.<br>
                <b>mouseout</b>: cuando el usuario retire el ratón del enlace.<br>
                <b>addClass()</b>: añade una clase al elemento seleccionado.<br>
                <b>removeClass()</b>: quita una clase al elemento seleccionado.<br>
                <b>#ejemplo3</b>: id del elemento al que se le quiere aplicar la función.<br>
                <b>examples</b>: clase que se desea manipular.
            </p><br>
            <a id="a-exa" href="#" rel="script">Prueba este ejemplo #3</a>
            <div id="ejemplo3" class="exam-js">
                Pon el ratón encima de esta capa</div>
        </div>
    </div>







</section>
<?php
include "partials/footer.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 8/24/2017
 * Time: 7:37 PM
 */
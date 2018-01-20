<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="jQuery">
    <nav class="padd2 nav-jQuery">
        <a href="../directory-jQuery.php">Volver al directorio</a>
    </nav>
    <hr class="jQuery">
    <section class="section-jQuery padd5">
        <h4 class="text-center">Ocultar y mostrar elementos</h4>
        <div class="padd2 exam-jQuery">
            <h6>Hide and show elements | Ocultar y mostrar elementos</h6>
            <div class="padd2">
                <b>Modificar html en un div con botones</b>
                <p>
                    Ddonde tenemos dos botones y un texto. Al pulsar un botón,
                    cambiaremos el texto y al pulsar el otro pondremos otro texto distinto:
                </p>
                <div id="div-button" class="exam-jQuery text-center">
                    Haz clic en un botón</div>
                <div class="text-center">
                    <input id="button-a" type="button" value="Botón A" class="bttn">
                    <input id="button-b" type="button" value="Botón B" class="bttn">
                </div>
            </div>
        </div>
        <div class="padd2 exam-jQuery">
            <h6>Mostrar y ocultar un div enfocando un elemento</h6>
            <div class="padd2">
                <p>
                Ahora vamos a tener dos capas en nuestra página. Una capa estará
                siempre visible y otra capa aparecerá inicialmente oculta y la vamos a mostrar u
                ocultar dependiendo de si el usuario coloca el ratón encima de la capa que
                está siempre visible:
            </p>
            <div id="capa" class="exam-jQuery text-center">
                Pon el ratón encima de esta capa</div>
            <div id="mensaje" style="display: none;" class="exam-jQuery text-center">
                Has puesto el ratón encima!! <br>
                (Ahora quítalo de la capa)</div>
            </div>
        </div>
        <div class="padd2 exam-jQuery">
            <h6>Mostrar u ocultar un div con un swich</h6>
            <div class="padd2">
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
                    Estas líneas sirven para especificar eventos.<br>
                    -$(document).ready(): se hace para lanzar instrucciones cuando el
                    navegador está preparado para recibirlas.<br>
                    -$("#mayoria_edad").click(): sirve para realizar acciones cuando
                    ha hecho clic sobre el #elemento con id "mayoria_edad", que es el
                    checkbox del formulario.<br>
                    -attr(): método para comprobar el estado del atributo "checked"
                    del elemento "#mayoria_edad".<br>
                    -Entonces, si estaba "checked", se ejecuta el css que muestrar
                    el elemento y si no ejecuta el css que lo oculta.
                </p>
            </div>
        </div>
        <div class="padd2 exam-jQuery">
            <h6>Cambiar clases css enfocando un elemento</h6>
            <div class="padd2">
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
            <div id="ejemplo3" class="exam-jQuery">
                Pon el ratón encima de esta capa</div>
            </div>
        </div>
    </section>
    <hr class="jQuery">
    <?php
    include "../partials/footer.php";
    include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 1/6/2018
 * Time: 12:57 PM
 */
?>
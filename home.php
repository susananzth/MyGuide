<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
<section class="padd2">
    <div class="">
        <h4 class="title text-center">Hide and show elements | Ocultar y mostrar elementos</h4>
        <div class="padd2">
            <p>
                Con <b>botones</b>: donde tenemos dos botones y un texto. Al pulsar un botón,
                cambiaremos el texto y al pulsar el otro pondremos otro texto distinto:
            </p>
            <div id="div-button" class="examples">
                Haz clic en un botón</div>
            <div class="text-center">
                <input id="button-a" type="button" value="Botón A" class="bttn">
                <input id="button-b" type="button" value="Botón B" class="bttn">
            </div>
        </div>
        <div class="padd2">
            <p>
                <b>Focus</b>: Ahora vamos a tener dos capas en nuestra página. Una capa estará siempre
                visible y otra capa aparecerá inicialmente oculta y la vamos a mostrar u
                ocultar dependiendo de si el usuario coloca el ratón encima de la capa que
                está siempre visible:
            </p>
            <div id="capa" class="examples">
                Pon el ratón encima de esta capa</div>
            <div id="mensaje" style="display: none;" class="examples">
                Has puesto el ratón encima!! <br>
                (Ahora quítalo de la capa)</div>
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
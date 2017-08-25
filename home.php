<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
<section class="padd2">
    <div class="">
        Ejemplo, donde tenemos dos botones y un texto. Al pulsar un botón,
        cambiaremos el texto y al pulsar el otro pondremos otro texto distinto:
        <div id="capa" style="padding: 10px; background-color: #ff8800">
            Haz clic en un botón</div>
        <input type="button" value="Botón A"
               onclick="$('#capa').html('Has hecho clic en el botón <b>A</b>')">
        <input type="button" value="Botón B"
               onclick="$('#capa').html('Recibido un clic en el botón <b>B</b>')">
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
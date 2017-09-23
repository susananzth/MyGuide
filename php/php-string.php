<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";
include "functions/functions-string.php";
?>
    <section class="php padd5">
        <h4>String</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de STRLEN</h6>
            <div class="padd2">
                <p>SRTLEN Para contar los caracteres de la cadena y los devuelva en numero entero.</p>
                <br>
                <?php
                    exampleStrlen();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de SUBSRT</h6>
            <div class="padd2">
                <p>SUBSRT para obtener una parte de la cadena.</p>
                <br>
                <?php
                exampleSubsrt();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo combinando STRLEN y SUBSRT</h6>
            <div class="padd2">
                <p>SUBSRT para obtener una parte de la cadena.</p>
                <br>
                <?php
                exampleStrlenSubstr();
                ?>
            </div>
        </div>

    </section>

<?php
include "../partials/footer.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 1:00 PM
 */
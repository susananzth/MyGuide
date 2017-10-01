<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";
include "functions/functions-numbers.php";
?>
    <section class="php padd5">
        <h4>Números</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de ROUND()</h6>
            <div class="padd2">
                <p>ROUND redondea un numero decimal.</p><br>
                <?php
                    exampleRound();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de RAND()</h6>
            <div class="padd2">
                <p>RAND arroja un número aleatorio, admite un min y un max.</p><br>
                <?php
                    exampleRand();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de ...</h6>
            <div class="padd2">
                <?php

                ?>
            </div>
        </div>
    </section>

<?php
include "../partials/footer.php";
include "partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 5:19 PM
 */
<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-numbers.php";
?>
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="textc-center">Números</h4>
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
    </section>
    <hr class="php">
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 5:19 PM
 */?>
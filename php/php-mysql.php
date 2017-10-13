<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-mysql.php";

?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de conexión a la base de datos por procedimiento</h6>
            <div class="padd2">
                <p>
                    $connection=mysqli_connect()
                </p><br>
                <?php
                exampleDDBBprocedimiento();
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
include "../partials/bottom-page.php";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 10/4/2017
 * Time: 12:01 AM
 */
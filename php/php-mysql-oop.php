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
            <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
            <div class="padd2">
                <form id="form-searchOOP" action="php-partials/partials-mysql-oop.php" method="get">
                    <label for="txt-searchOOP">Búscar:
                        <input id="txt-searchOOP" name="txt-searchOOP" type="text"
                               placeholder="Búsqueda" class="">
                    </label>
                    <label for="btn-searchOOP">
                        <input id="btn-searchOOP" name="btn-searchOOP" type="submit" value="Búscar">
                    </label>
                </form>
            </div>
        </div>
    </section>
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/12/2017
 * Time: 8:39 PM
 */
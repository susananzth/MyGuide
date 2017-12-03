<?php
include "../partials/top_page.php";
include "../partials/header.php";

?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de formulario de registro</h6>
            <div class="padd2">
                <form id="form-insert" action="php-partials/partials-mysql-insert.php" method="get">
                    <label for="txt-cedula">Cédula:
                        <input id="txt-cedula" name="txt-cedula" type="number"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="txt-name">Nombre:
                        <input id="txt-name" name="txt-name" type="text"
                               placeholder="Nombre" class="">
                    </label>
                    <label for="txt-lastname">Apellido:
                        <input id="txt-lastname" name="txt-lastname" type="text"
                               placeholder="Apellido" class="">
                    </label>
                    <label for="txt-phone">Teléfono:
                        <input id="txt-phone" name="txt-phone" type="text"
                               placeholder="Teléfono" class="">
                    </label>
                    <label for="txt-address">Dirección:
                        <input id="txt-address" name="txt-address" type="text"
                               placeholder="Dirección" class="">
                    </label>
                    <label for="btn-add">
                        <input id="btn-add" name="btn-add" type="submit" value="Agregar">
                    </label>
                </form>
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
 * Date: 12/2/2017
 * Time: 9:37 PM
 */
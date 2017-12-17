<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";

?>
    <section class="php padd5">
        <h4>Programación orientada a objetos (OOP)</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejercicio sencillo de OOP</h6>
            <div class="padd2">
                <?php
                    include "class/class-oop-ex01.php";
                ?>
            </div>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de un formuario de búsqueda con OOP.</h6>
            <div class="padd2">
                <form id="form-search" action="php-partials/partials-mysql-oop.php" method="get">
                    <label for="txt-cedule">Cédula:
                        <input id="txt-cedula" name="txt-cedula" type="text"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="txt-name">Nombre:
                        <input id="txt-name" name="txt-name" type="text"
                               placeholder="Nombre" class="">
                    </label>
                    <label for="btn-search">
                        <input id="btn-search" name="btn-search" type="submit" value="Búscar">
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
 * Date: 9/24/2017
 * Time: 4:11 PM
 */
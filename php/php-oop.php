<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">Programación orientada a objetos (OOP)</h4>
        <div class="padd2 exam-php">
            <h6>Ejercicio sencillo de OOP</h6>
            <div class="padd2">
                <?php
                    include "class/class-oop-ex01.php";
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de búsqueda con OOP.</h6>
            <div class="padd2">
                <?php
                //include "php-partials/partials-mysql-oop2.php";

                ?>
            </div>
        </div>
        <!-- -->
        <div class="padd2 exam-php">
            <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
            <div class="padd2">
                <form id="form-searchPDO-OOP" action="php-partials/partials-mysql-PDO-OOP.php" method="post">
                    <label for="txt-cedula">Búscar:
                        <input id="txt-cedula" name="txt-cedula" type="text"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="btn-search">
                        <input id="btn-search" name="btn-search" type="submit" value="Búscar">
                    </label>
                </form>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
            <div class="padd2">
                <form id="form-searchPDO-OOP2" action="php-partials/partials-mysql-PDO-OOP2.php" method="post">
                    <label for="txt-cedula2">Búscar:
                        <input id="txt-cedula2" name="txt-cedula2" type="text"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="btn-search2">
                        <input id="btn-search2" name="btn-search2" type="submit" value="Búscar">
                    </label>
                </form>
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
 * Date: 9/24/2017
 * Time: 4:11 PM
 */?>
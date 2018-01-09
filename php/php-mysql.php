<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-mysql.php";
?>
<hr class="php">
<?php
include "../partials/nav-php.php";
?>
<hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">MySQL</h4>
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
            <h6>Ejemplo de un formuario de búsqueda.</h6>
            <div class="padd2">
                <form id="form-search" action="php-partials/partials-mysql-search.php" method="get">
                    <label for="txt-search">Búscar:
                        <input id="txt-search" name="txt-search" type="text"
                               placeholder="Búsqueda" class="">
                    </label>
                    <label for="btn-search">
                        <input id="btn-search" name="btn-search" type="submit" value="Búscar">
                    </label>
                </form>
            </div>
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
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formulario para actualizar un regístro.</h6>
            <div class="padd2">
                <form id="form-update" action="php-partials/partials-mysql-update.php" method="get">
                    <label for="txt-update">Ingrese la cédula a actualizar:
                        <input id="txt-update" name="txt-update" type="number"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="btn-update">
                        <input id="btn-update" name="btn-update" type="submit" value="Actualizar">
                    </label>
                </form>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formulario para eliminar de regístro.</h6>
            <div class="padd2">
                <form id="form-delete" action="php-partials/partials-mysql-delete.php" method="get">
                    <label for="txt-delete">Ingrese la cédula a eliminar:
                        <input id="txt-delete" name="txt-delete" type="number"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="btn-delete">
                        <input id="btn-delete" name="btn-delete" type="submit" value="Eliminar">
                    </label>
                </form>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formulario para búscar y modificar regístro.</h6>
            <div class="padd2">
                <form id="form-searchUp" action="php-partials/partials-mysql-searchUp.php" method="get">
                    <label for="txt-searchUp">Ingrese la cédula a búscar:
                        <input id="txt-searchUp" name="txt-searchUp" type="number"
                               placeholder="Cédula" class="">
                    </label>
                    <label for="btn-searchUp">
                        <input id="btn-searchUp" name="btn-searchUp" type="submit" value="Búscar">
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
 * Date: 10/4/2017
 * Time: 12:01 AM
 */
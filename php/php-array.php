<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-array.php";
?>
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">Arrays</h4>
        <div class="padd2 exam-php">
            <h6>Algunos usos de un array indexado.</h6>
            <div class="padd2">
                <?php
                examplesUsosArray();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Otro ejemplo de array indexado.</h6>
            <p>También usando <b>for</b>.</p>
            <div class="padd2">
                <?php
                examplesArray();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Otro ejemplo de array asociativo.</h6>
            <p>También usando <b>foreach</b>.</p>
            <div class="padd2">
                <?php
                examplesArrayAsociativo();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>IS_ARRAY()</h6>
            <p>Esta función devuelve un booleano al comprobar si una variable es un array,
                <b>true</b> en caso de que sea un array y <b>false</b> en caso contrario.</p>
            <div class="padd2">
                <?php
                examplesIs_array();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de SORT()</h6>
            <p><b>SORT()</b> sirve para ordenar los elementos de un array
                de forma ascendente.<br>
                <b>RSORT()</b> sirve para ordenar los elementos de un array
                de forma descendente.<br>
                asort() - sort associative arrays in ascending order, according to the value
                <br>
                ksort() - sort associative arrays in ascending order, according to the key
                <br>
                arsort() - sort associative arrays in descending order, according to the value
                <br>
                krsort() - sort associative arrays in descending order, according to the key</p>
            <div class="padd2">
                <?php
                    examplesSort();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de array multidimencional</h6>
            <p>Usando <b>foreach</b>, <b>while</b> y <b>list()</b> para imprimir el array.
            Y también la segunda opción más sencilla con <b>var_dump()</b>.</p>
            <div class="padd2">
                <?php
                    examplesArrayMultidimencional();
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
 * Time: 12:32 PM
 */
?>
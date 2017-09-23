<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
    <section class="php padd5">
        <h4>Usando PHP y Mysql</h4>
        <div class="exam-php">
            <h5>Directorio</h5>
            <ul class="padd2">
                <li><a href="#tips">Tips</a></li>
                <li><a href="php/php-string.php">String</a></li>
                <li><a href="php/php-flows.php">Control de flujos</a></li>
                <li><a href="php/php-array.php">Array</a></li>
                <li><a href="php/php-ciclos.php">Ciclos</a></li>
            </ul>
        </div>
        <div id="tips" class="padd2">
            <h6>Tips</h6>
            <p class="padd2">
                <b>Diferencia entre INCLUDE y REQUIRE:</b>
                El <u>include</u> ejecuta todo el código a pesar de un error.
                El <u>require</u> detiene la ejecución del programa cuando no funciona ese segmento,
                porque el programa <em>requiere</em> ese segmento para continuar.

            </p>
            <p class="padd2">
                <b>Variables:</b>
                <u>static</u> si no se puede acceder a una variable local que dentro de una función
                se puede colocar <em>estatic</em> para que mantenga el valor al terminar la función
                y así se pueda usar la variable por fuera de la función.

            </p>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de una función</h6>
            <div class="padd2">
                <?php
                //Primero se incluye o requiere el archivo donde se encuentra la función
                include "php/functions-flows.php";
                //Se llama la función.
                dameDatos();
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
        ​
    </section>

<?php
include "partials/footer.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/22/2017
 * Time: 7:53 PM
 */

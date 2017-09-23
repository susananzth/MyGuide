<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";
include "functions/functions-flows.php";
?>
    <section class="php padd5">
        <h4>Control de flujos</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de if simple</h6>
            <div class="padd2">
                <?php
                    exampleIfSimpple();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de if combinado con HTML</h6>
            <div class="padd2">
                <?php
                exampleIfWithHTML();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de else if</h6>
            <div class="padd2">
                <?php
                exampleElseIf();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de if ternario</h6>
            <div class="padd2">
                <?php
                exampleIfTernario();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de if lógico</h6>
            <div class="padd2">
                <?php
                exampleIfLogico();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de if con incremento y decremento</h6>
            <div class="padd2">
                <?php
                exampleIncrementoDecremento();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de while e if combinados</h6>
            <div class="padd2">
                <p>Vamos a lanzar una moneda hasta que tengamos tres caras seguidas.</p>
                <?php
                exampleWhileIf();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de while</h6>
            <div class="padd2">
                <?php
                exampleWhile();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de foreach</h6>
            <div class="padd2">
                <?php
                exampleForeach();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplos de un switchs</h6>
            <div class="padd2">
                <p><u>Un switch común</u></p>
                <?php
                exampleSwitchSimple();
                ?>
            </div>
            <div class="padd2">
                <p><u>Un switch con varias condiciones para una sentencia.</u></p>
                <?php
                exampleSwitchMultiple();
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
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:25 PM
 */
<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";
include "functions/functions-string.php";
?>
    <section class="php padd5">
        <h4>String</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STR_WORD_COUNT()</h6>
            <div class="padd2">
                <p>STR_WORD_COUNT cuenta el número de palabras en una cadena.</p>
                <br>
                <?php
                exampleStr_word_count();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRREV()</h6>
            <div class="padd2">
                <p>STRREV invierte una cadena.</p>
                <br>
                <?php
                exampleStrrev();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STR_REPLACE()</h6>
            <div class="padd2">
                <p>STRREPLACE sustituye a algunos personajes con algunos otros caracteres
                    de una cadena.</p>
                <br>
                <?php
                exampleStr_replace();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRLEN()</h6>
            <div class="padd2">
                <p>SRTLEN Para contar los caracteres de la cadena y los devuelva en numero entero.</p>
                <br>
                <?php
                    exampleStrlen();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de SUBSRT()</h6>
            <div class="padd2">
                <p>SUBSRT para obtener una parte de la cadena.</p>
                <br>
                <?php
                exampleSubsrt();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo combinando STRLEN() y SUBSTR()</h6>
            <div class="padd2">
                <br>
                <?php
                exampleStrlenSubstr();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRCMP()</h6>
            <div class="padd2">
                <p>SRTCMP para comparar dos string y ver si son iguales.
                    Si el resultado es "1" significa que <em>no</em> son iguales y si
                    el resultado es "0" significa que son iguales.</p>
                <br>
                <?php
                exampleStrcmp();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRCASECMP()</h6>
            <div class="padd2">
                <p>STRCASECMP para comparar dos string y ver si son iguales sin distinguir mayúsculas.
                    Si el resultado es "1" significa que <em>no</em> son iguales y si
                    el resultado es "0" significa que son iguales.</p>
                <br>
                <?php
                exampleStrcasecmp();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRTOUPPER() y STRTOLOWER()</h6>
            <div class="padd2">
                <p>STRTOUPPER sirve para convertir una cadena y colocarla toda en mayúculas.</p>
                <p>STRTOLOWER sirve para convertir una cadena y colocarla toda en minúculas.</p>
                <br>
                <?php
                exampleStrtoUpperLower();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de UCWORDS()</h6>
            <div class="padd2">
                <p>UCWORDS sirve para convertir la primela letra de cada palabra
                    de la oración en mayúculas.</p>
                <br>
                <?php
                exampleUcwords();
                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de STRPOS()</h6>
            <div class="padd2">
                <p>STRPOS sirve para encontrar la posición de una cadena o caracter dentro de
                    la cadena.</p>
                <br>
                <?php
                exampleStrpos();
                ?>
            </div>
        </div>

    </section>

<?php
include "../partials/footer.php";
include "partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 1:00 PM
 */
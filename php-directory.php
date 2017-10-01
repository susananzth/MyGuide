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
                <li><a href="php/php-numbers.php">Números</a></li>
                <li><a href="php/php-var-cons.php">Var y Cons</a></li>
                <li><a href="php/php-flows.php">Control de flujos</a></li>
                <li><a href="php/php-array.php">Array</a></li>
                <li><a href="php/php-forms.php">Forms</a></li>
                <li><a href="php/php-oop.php">OOP</a></li>
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
            <div class="padd2">
                <b>Comparadores:</b>
                <p>Para ver todos los operadores :
                    <a href="https://www.w3schools.com/php/php_operators.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank">w3schools</a>
                </p>
                <table class="table">
                    <tr>
                        <td><b>Sintaxis -----ghjgjgghjgj--.</b></td>
                        <td><b>Definición</b></td>
                        <td><b>Resultado</b></td>
                    </tr>
                    <tr>
                        <td>$var1 == $var2</td>
                        <td>Igual que</td>
                        <td>Verdadero si las dos variables son iguales.</td>
                    </tr>
                    <tr>
                        <td>$var1 === $var2</td>
                        <td>Idéntico que</td>
                        <td>Verdadero si las dos variables son iguales y del mismo tipo.</td>
                    </tr>
                    <tr>
                        <td>$var1 != $var2</td>
                        <td>Diferente que</td>
                        <td>Verdadero si las dos variables no son iguales.</td>
                    </tr>
                    <tr>
                        <td>$var1 <> $var2</td>
                        <td>Diferente que</td>
                        <td>Verdadero si las dos variables no son iguales y además no son del
                            mismo tipo.</td>
                    </tr>
                    <tr>
                        <td>$var1 > $var2</td>
                        <td>Mayor que</td>
                        <td>Verdadero si $var1 es mayor que $var2.</td>
                    </tr>
                    <tr>
                        <td>$var1 < $var2</td>
                        <td>Menor que</td>
                        <td>Verdadero si $var1 es menor que $var2.</td>
                    </tr>
                    <tr>
                        <td>$var1 >= $var2</td>
                        <td>Mayor o igual que</td>
                        <td>Verdadero si $var1 es mayor o igual que $var2.</td>
                    </tr>
                    <tr>
                        <td>$var1 <= $var2</td>
                        <td>Menor o igual que</td>
                        <td>Verdadero si $var1 es menor o igual que $var2.</td>
                    </tr>

                </table>

            </div>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de una función</h6>
            <div class="padd2">
                <?php
                //Primero se incluye o requiere el archivo donde se encuentra la función
                include "php/functions/functions-flows.php";
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
include "partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/22/2017
 * Time: 7:53 PM
 */

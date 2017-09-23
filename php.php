<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
    <section id="php" class="padd5">
        <h4>Usando PHP y Mysql</h4>
        <div class="padd2">
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
                include "php/functions.php";
                //Se llama la función.
                dameDatos();
                ?>
            </div>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplos de un switchs</h6>
            <div class="padd2">
                <p><u>Un switch común</u></p>
                <?php
                $miNum = 2; // Declaro la variable.
                switch ($miNum) { //Detecta que valor está en la variable
                    case 1:
                        echo "Es la condición n°1";
                        break;
                    case 2: //Esta es el caso que se cumplirá
                        echo "Es la condición n°2";
                        break;
                    case 3:
                        echo "Es la condición n°3";
                        break;
                    default: //Case que se ejecuta si los case anteriores son falsos.
                        echo "Ninguna de las anteriores";
                }
                ?>
            </div>
            <div class="padd2">
                <p><u>Un switch con varias condiciones para una sentencia.</u></p>
                <?php
                $i = 5;
                switch ($i): /*Esta forma de abrir y cerrar un switch se usa cuando se
                                mezcla html con php. Se llama sintaxis alternativo. */
                    case 0:
                        echo '$i es 0.';
                        break;
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                        echo '"$i" está en algún lado entre  1 y 5.';
                        break;
                    case 6:
                    case 7:
                        echo '$i es 6 o 7.';
                        break;
                    default:
                        echo '$i es igual o mayor que 8';
                endswitch;//Y aquí se cierra la sintaxis alternativo.
                ?>
            </div>
        </div>

        <div class="padd2 exam-php">
            <h6>Ejemplo de un array</h6>
            <div class="padd2">
                <?php
                $miArray = array("Huevo", "Tomate", "Chauchas");
                //Acceso mediante corchetes.
                echo $miArray[1] . ', ';
                /* -------------------------------- */
                $misLenguajes = array("HTML/CSS",
                    "JavaScript", "PHP", "Python", "Ruby");
                //Acceso mediante llaves. Es indiferente.
                echo $misLenguajes{4} . ', ';
                /* -------------------------------- */
                //Modificando el array en la posición 4.
                $misLenguajes[4] = "Java";
                foreach($misLenguajes as $leng) {
                print "<em>$leng, </em>";}
                /* -------------------------------- */
                //Eliminando un elemento del array.
                unset($misLenguajes[3]);
                /* -------------------------------- */
                //Eliminando el array.
                unset($misLenguajes);
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

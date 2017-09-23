<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
    <section id="php" class="padd5">
        <h4>Usando PHP y Mysql</h4>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un switch</h6>
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
        <div class="padd2 exam-php">
            <h6>Ejemplo de un switch</h6>
            <?php

            ?>
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
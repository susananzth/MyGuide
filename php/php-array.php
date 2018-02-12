<?php
include "functions/functions-array.php";
?>
<!DOCTYPE html>
<html lang="en" ng-app="php">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre php."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="php, web developer, backend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of php | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
                <a href="../myGuide.php#!directory-php">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <h4 class="text-center">Arrays</h4>
            <div class="padd2 example">
                <h6>Algunos usos de un array indexado.</h6>
                <div class="padd2">
                    <?php
                    examplesUsosArray();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Otro ejemplo de array indexado.</h6>
                <p>También usando <b>for</b>.</p>
                <div class="padd2">
                    <?php
                    examplesArray();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Otro ejemplo de array asociativo.</h6>
                <p>También usando <b>foreach</b>.</p>
                <div class="padd2">
                    <?php
                    examplesArrayAsociativo();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>IS_ARRAY()</h6>
                <p>Esta función devuelve un booleano al comprobar si una variable es un array,
                    <b>true</b> en caso de que sea un array y <b>false</b> en caso contrario.</p>
                <div class="padd2">
                    <?php
                    examplesIs_array();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
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
            <div class="padd2 example">
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
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('php' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
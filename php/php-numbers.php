<?php
include "functions/functions-numbers.php";
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
            <h4 class="textc-center">Números</h4>
            <div class="padd2 example">
                <h6>Ejemplo de ROUND()</h6>
                <div class="padd2">
                    <p>ROUND redondea un numero decimal.</p><br>
                    <?php
                        exampleRound();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de RAND()</h6>
                <div class="padd2">
                    <p>RAND arroja un número aleatorio, admite un min y un max.</p><br>
                    <?php
                        exampleRand();
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
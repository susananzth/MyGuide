<?php
include "functions/functions-flows.php";
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
            <h4 class="text-center">Control de flujos</h4>
            <div class="padd2 example">
                <h6>Ejemplo de if simple</h6>
                <div class="padd2">
                    <?php
                        exampleIfSimpple();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de if combinado con HTML</h6>
                <div class="padd2">
                    <?php
                    exampleIfWithHTML();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de else if</h6>
                <div class="padd2">
                    <?php
                    exampleElseIf();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de if ternario</h6>
                <div class="padd2">
                    <?php
                    exampleIfTernario();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de if lógico</h6>
                <div class="padd2">
                    <?php
                    exampleIfLogico();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de if con incremento y decremento</h6>
                <div class="padd2">
                    <?php
                    exampleIncrementoDecremento();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de for</h6>
                <div class="padd2">
                    <?php
                    exampleFor();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de while e if combinados</h6>
                <div class="padd2">
                    <p>Vamos a lanzar una moneda hasta que tengamos tres caras seguidas.</p>
                    <?php
                    exampleWhileIf();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de while</h6>
                <div class="padd2">
                    <?php
                    exampleWhile();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplo de foreach</h6>
                <div class="padd2">
                    <?php
                    exampleForeach();
                    ?>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Ejemplos de un switchs</h6>
                <div class="padd2">
                    <p><u>Un switch común</u></p>
                    <?php
                    exampleSwitchSimple();
                    ?>
                </div>
                <div class="padd2">
                    <p><u>Un switch con varias condiciones para una sentencia.</u></p><br>
                    <?php
                    exampleSwitchMultiple();
                    ?>
                    <br><br><p><u>Otro switch con varias condiciones para una sentencia.</u></p>
                    <?php
                    exampleSwitchMultiple2();
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
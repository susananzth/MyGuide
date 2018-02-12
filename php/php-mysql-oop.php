<?php
include "functions/functions-mysql.php";
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
            <h4 class="text-center">MySQL</h4>
            <div class="padd2 example">
                <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
                <div class="padd2">
                    <form id="form-searchOOP" action="php-partials/partials-mysql-oop.php" method="get">
                        <label for="txt-searchOOP">Búscar:
                            <input id="txt-searchOOP" name="txt-searchOOP" type="text"
                                   placeholder="Búsqueda" class="">
                        </label>
                        <label for="btn-searchOOP">
                            <input id="btn-searchOOP" name="btn-searchOOP" type="submit" value="Búscar">
                        </label>
                    </form>
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

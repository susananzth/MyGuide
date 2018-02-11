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
        <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of php | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="php">
        <nav class="padd2 nav-php">
                <a href="../myGuide.php#!directory-php">Volver al directorio</a>
        </nav>
        <hr class="php">
        <section class="section-php padd5">
            <h4 class="text-center">MySQL</h4>
            <div class="padd2 exam-php">
                <h6>Ejemplo de un formuario de búsqueda con PDO.</h6>
                <div class="padd2">
                    <form id="form-search" action="php-partials/partials-mysql-pdoSelect.php" method="get">
                        <label for="txt-cedule">Cédula:
                            <input id="txt-cedula" name="txt-cedula" type="text"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="txt-name">Nombre:
                            <input id="txt-name" name="txt-name" type="text"
                                   placeholder="Nombre" class="">
                        </label>
                        <label for="btn-search">
                            <input id="btn-search" name="btn-search" type="submit" value="Búscar">
                        </label>
                    </form>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de formulario de registro con PDO.</h6>
                <div class="padd2">
                    <form id="form-insertPDO" action="php-partials/partials-mysql-pdoInsert.php" method="post">
                        <label for="txt-cedula">Cédula:
                            <input id="txt-cedula" name="txt-cedula" type="number"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="txt-name">Nombre:
                            <input id="txt-name" name="txt-name" type="text"
                                   placeholder="Nombre" class="">
                        </label>
                        <label for="txt-lastname">Apellido:
                            <input id="txt-lastname" name="txt-lastname" type="text"
                                   placeholder="Apellido" class="">
                        </label>
                        <label for="txt-phone">Teléfono:
                            <input id="txt-phone" name="txt-phone" type="text"
                                   placeholder="Teléfono" class="">
                        </label>
                        <label for="txt-address">Dirección:
                            <input id="txt-address" name="txt-address" type="text"
                                   placeholder="Dirección" class="">
                        </label>
                        <label for="btn-add">
                            <input id="btn-add" name="btn-add" type="submit" value="Agregar">
                        </label>
                    </form>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de un formuario para eliminar registro con PDO.</h6>
                <div class="padd2">
                    <form id="form-delete" action="php-partials/partials-mysql-pdoDelete.php" method="post">
                        <label for="txt-cedule">Cédula:
                            <input id="txt-cedula" name="txt-cedula" type="text"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="btn-delete">
                            <input id="btn-delete" name="btn-delete" type="submit" value="Eliminar">
                        </label>
                    </form>
                </div>
            </div>
        </section>
        <hr class="php">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('php' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
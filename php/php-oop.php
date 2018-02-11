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
        <hr class="php">
        <nav class="padd2 nav-php">
                <a href="../myGuide.php#!directory-php">Volver al directorio</a>
        </nav>
        <hr class="php">
        <section class="section-php padd5">
            <h4 class="text-center">Programación orientada a objetos (OOP)</h4>
            <div class="padd2 exam-php">
                <h6>Ejercicio sencillo de OOP</h6>
                <div class="padd2">
                    <?php
                        include "class/class-oop-ex01.php";
                    ?>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de búsqueda con OOP.</h6>
                <div class="padd2">
                    <?php
                    //include "php-partials/partials-mysql-oop2.php";

                    ?>
                </div>
            </div>
            <!-- -->
            <div class="padd2 exam-php">
                <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
                <div class="padd2">
                    <form id="form-searchPDO-OOP" action="php-partials/partials-mysql-PDO-OOP.php" method="post">
                        <label for="txt-cedula">Búscar:
                            <input id="txt-cedula" name="txt-cedula" type="text"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="btn-search">
                            <input id="btn-search" name="btn-search" type="submit" value="Búscar">
                        </label>
                    </form>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
                <div class="padd2">
                    <form id="form-searchPDO-OOP2" action="php-partials/partials-mysql-PDO-OOP2.php" method="post">
                        <label for="txt-cedula2">Búscar:
                            <input id="txt-cedula2" name="txt-cedula2" type="text"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="btn-search2">
                            <input id="btn-search2" name="btn-search2" type="submit" value="Búscar">
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

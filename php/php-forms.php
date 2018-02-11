<?php
include "functions/functions-forms.php";
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
        <hr class="php">
        <nav class="padd2 nav-php">
                <a href="../myGuide.php#!directory-php">Volver al directorio</a>
        </nav>
        <hr class="php">
        <section class="section-php padd5">
            <h4 class="text-center">Formularios</h4>
            <div class="padd2 exam-php">
                <h6>Ejemplo de un formulario</h6>
                <div class="padd2">
                    <form id="form-begining" method="post" action="functions/functions-forms.php">
                        <label for="name">Nombre:
                            <input id="name" name="name" type="text" placeholder="Nombre" class="">
                        </label>
                        <label for="age">Edad:
                            <input id="age" name="age" type="text" placeholder="Edad" class="">
                        </label>
                        <input id="send" name="send" type="submit" class="btn" value="Enviar">
                    </form>
                    <?php

                    ?>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de una pequeña calculadora</h6>
                <div class="padd2">
                    <form id="calc" method="post" action="functions/functions-forms.php">
                        <label for="ope-one">
                            <input id="ope-one" name="ope-one" type="number" placeholder="Número uno">
                        </label>
                        <label for="ope-two">
                            <input id="ope-two" name="ope-two" type="number" placeholder="Número dos">
                        </label>
                        <label for="operation">
                            <select id="operation" name="operation">
                                <option>Seleccione operación</option>
                                <option>Suma</option>
                                <option>Resta</option>
                                <option>Multiplicación</option>
                                <option>División</option>
                                <option>Módulo</option>
                            </select>
                        </label>
                        <input id="send-calc" name="send-calc" type="submit" value="Calcular">
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

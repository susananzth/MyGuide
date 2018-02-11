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
            <h4 class="text-center">Tips</h4>
            <div class="exam-php padd2">
                <h6>Diferencia entre INCLUDE y REQUIRE:</h6>
                <p class="padd2">
                    El <u>include</u> ejecuta todo el código a pesar de un error.
                    El <u>require</u> detiene la ejecución del programa cuando no funciona ese segmento,
                    porque el programa <em>requiere</em> ese segmento para continuar.
                </p>
            </div>
            <div class="exam-php padd2">
                <h6>Variables:</h6>
                <p class="padd2">
                    <u>static</u> si no se puede acceder a una variable local que dentro de una función
                    se puede colocar <em>estatic</em> para que mantenga el valor al terminar la función
                    y así se pueda usar la variable por fuera de la función.
                </p>
            </div>
            <div class="exam-php padd2">
                <h6>Comparadores:</h6>
                <p class="padd2">Para ver todos los operadores :
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
            <div class="exam-php padd2">
                <h6>Ejemplo de una función</h6>
                <div class="padd2">
                    <?php
                    //Primero se incluye o requiere el archivo donde se encuentra la función
                    include "../php/functions/functions-flows.php";
                    //Se llama la función.
                    dameDatos();
                    ?>
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
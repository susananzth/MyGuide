<!DOCTYPE html>
<html lang="en" ng-app="js">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre Javascript."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="javascript, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of Javascript | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-javascript">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <h4 class="text-center">Entrada y salida de datos</h4>
            <div class="padd2 example">
                <h6>prompt</h6>
                <div class="padd2">
                    Permite que el usuario introduzca información necesaria para la ejecución del programa:<br>
                    <blockquote class="code"><code>
                        var nombre=prompt("Introduce tu nombre, por favor.");<br>
                        var apellido=prompt("Introduce tu nombre, por favor.");<br>
                        document.write("&ltp&gt");<br>
                        document.write(nombre + " " + apellido);<br>
                        document.write("&lt/p&gt");
                    </code></blockquote>
                    <script type="text/javascript">
                        var nombre=prompt("Introduce tu nombre, por favor.");
                        var apellido=prompt("Introduce tu nombre, por favor.");
                        document.write("<p>");
                        document.write(nombre + " " + apellido);
                        document.write("</p>");
                    </script>
                </div>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('js' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
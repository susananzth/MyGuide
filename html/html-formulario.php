<!DOCTYPE html>
<html lang="en" ng-app="html5">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre HTML5."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="html, html5, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of HTML5 | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-html">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <div class="example padd2">
                <h4 class="title text-center">Ejemplo de un formulario</h4>
                <form action="miScript.php" method="GET">
                    <label for="to">Para: <input id="to" type="email"></label>
                    <label for="topic">Temática:
                        <select id="topic" name="topic">
                            <option>-- Elige un tema --</option>
                            <option value="proposal">Propuesta</option>
                            <option value="report">Reporte</option>
                            <option value="other">Otro</option>
                        </select>
                    </label>
                    <label for="subject">Asunto: <input id="subject" name="subject" type="text"></label>
                    <label for="body">Cuerpo: <textarea id="body" name="body"></textarea></label>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('html5' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
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
            <h4 class="text-center">Programación orientada a objetos</h4>
            <div class="padd2 example">
                <h6>Modificando estilo del botón</h6>
                <form class="text-center padd2">
                    <p><b>Ancho:</b> myButton.style.width="70%";</p>
                    <p><b>Largo:</b> myButton.style.height="50px";</p>
                    <p><b>Color de fondo:</b> myButton.style.background="pink";</p>
                    <label for="btn" class="padd2" alt="Botón 1">
                        <input id="btn" type="button" name="button" value="Botón 1">
                    </label>
                    <label for="btn2" class="padd2" alt="Botón 2">
                        <input id="btn2" type="button" name="button2" value="Botón 2">
                    </label>
                    <label for="square" class="padd2">
                        <input id="square" type="text" name="square" placeholder="Cuadro">
                    </label>
                </form>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('js' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
        <script type="text/javascript">
            /* documento en un objeto, y accedo al método getElementById() del objeto document. Con esto obtengo el elemento de la página que tenga el id "btn" y guardo la información de ese objeto dentro de la variable myButton */
            var myButton = document.getElementById("btn");
            var myButton2 = document.getElementById("btn2");
            var square = document.getElementById("square");
            /*Aquí modifico la propiedad del ancho del botón*/
            myButton.style.width="70%";
            myButton.style.height="50px";
            myButton.style.background="pink";
            myButton2.style.width="70%";
            myButton2.style.height="50px";
            myButton2.style.background="pink";
            myButton2.focus();
            square.style.backgroud="blue";
        </script>
    </body>
</html>
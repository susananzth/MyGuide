
<!DOCTYPE html>
<html lang="en" ng-app="angular">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre Angular JS."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="Angular, angularjs, js, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of Angular JS | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-angularJS">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <h4 class="text-center">Definiciones</h4>
                <div class="padd2 example">
                    <h6>Expresiones</h6>
                    <p class="padd2">
                        Expresión de sólo texto: {{'Hola'}}<br/>
                        Expresión de sólo texto con filtro lowercase: {{'Hola' | lowercase}}<br/>
                        Expresión de sólo texto con filtro uppercase: {{'Hola' | uppercase}}<br/>
                        Expresión de sólo número: {{10}}<br/>
                        Expresión de una suma: {{ 10 + 10 }}<br/>
                        Expresión de una moneda: {{50 | currency}}<br/> <!-- currency es un filtro que indica que el valor sea tratado como una moneda.-->
                        Expresión de una moneda definida: {{50 | currency:"Bs"}}<br/>
                    </p>
                </div>
                <div class="padd2 example" ng-init="firstName='John';lastName='Doe'">
                    <h6>AngularJS Strings</h6>
                    <p class="padd2">The name is {{ firstName + " " + lastName }}</p>
                </div>
                <div class="padd2 example" ng-init="person={firstName:'John',lastName:'Doe'}">
                    <h6>AngularJS Objects</h6>
                    <p class="padd2">The name is {{ person.lastName }}</p>
                    <b>Same example using ng-bind:</b>
                    <p class="padd2">The name is <span ng-bind="person.lastName"></span></p>
                </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp1 = angular.module('angular' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
        
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>

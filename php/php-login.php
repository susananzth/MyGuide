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
            <h4 class="text-center">MySQL</h4>
            <div class="padd2 exam-php">
                <h6>Ejemplo de formulario de login.</h6>
                <div class="padd2">
                    <form id="form-login" action="php-partials/partials-login.php" method="post">
                        <label for="txt-user">Usuario:
                            <input id="txt-user" name="txt-user" type="text"
                                   placeholder="Usuario" class="">
                        </label>
                        <label for="txt-pass">Contraseña:
                            <input id="txt-pass" name="txt-pass" type="text"
                                   placeholder="Contraseña" class="">
                        </label>
                        <label for="btn-login">
                            <input id="btn-login" name="btn-login" type="submit" value="Iniciar sesión">
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

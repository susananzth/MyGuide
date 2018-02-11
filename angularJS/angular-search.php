<!DOCTYPE html>
<html lang="en" ng-app="agenda">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre Angular JS."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="Angular, angularjs, js, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of Angular JS | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="angular">
        <nav class="padd2 nav-angular">
            <a href="../myGuide.php#!directory-angularJS">Volver al directorio</a>
        </nav>
        <hr class="angular">
        <section class="section-angular padd5">
            <h4 class="text-center">Guía telefónica</h4>
            <div class="padd2 exam-angular" ng-controller="myCtrl3">
                <label for="search">Búscar:
                <input id="search" ng-model="search" type="search" name="search" placeholder="Búsqueda">
                </label>
                <br/><br/>
                <p ng-repeat = " entrada in agenda | filter: search">
                <!-- Uso filter para que vaya mostrándome los nombres que coincida con lo que
                 vaya escribiendo en la caja de texto. -->
                    {{ entrada.name }} : {{ entrada.phone }}
                </p>
            </div>
        </section>
        <hr class="angular">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            /* ============ myCtrl3 ============ */
            var myApp3 = angular.module( 'agenda' , [] );
            myApp3.controller ('myCtrl3' , [ '$scope' , function($scope){
                $scope.agenda = [
                    {name: 'Ana', phone: '0416-127-5767'},
                    {name: 'Pedro', phone: '0426-862-4638'},
                    {name: 'Juan', phone: '0412-852-4538'},
                    {name: 'Linda', phone: '0424-981-1374'},
                    {name: 'Monica', phone: '0412-782-5691'}
                ]
            }]);
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
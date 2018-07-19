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
            <h4 class="text-center">Colección de datos</h4>
            <div class="padd2 example" ng-controller="myCtrl2">
                <b>Nombres:</b>
                <ul>
                    <li ng-repeat = "nameIndividual in nameSimple" class="li-noStyle">
                        {{ nameIndividual }}
                    </li>
                </ul>
                <br/>
                <b>Héroes:</b>
                <ul>
                    <li ng-repeat = "heroe in heroes" class="li-noStyle">
                        {{ heroe.name }}  {{ heroe.lastname }}
                    </li>
                </ul>
                <br/>
                <b>AngularJS Arrays</b>
                <div ng-init="points=[1,15,19,2,40]">
                <p>The third result is {{ points[2] }}</p>
                </div>
                <br/>
                <b>Same example using ng-bind:</b>
                <div ng-init="points=[1,15,19,2,40]">
                <p>The third result is <span ng-bind="points[2]"></span></p>
                </div>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            /* ============ myCtrl2 ============ */
            var myApp2 = angular.module( 'angular' , [] );
            myApp2.controller ('myCtrl2' , [ '$scope' , function($scope){
                $scope.nameSimple = ["Alois" , "Ana" , "Juana"];
                $scope.heroes = [
                    {name: "Arnol", lastname: "Perez"},
                    {name: "Monica", lastname: "Gimenez"},
                    {name: "Juana", lastname: "DeArco"}
                ]
            }]);
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
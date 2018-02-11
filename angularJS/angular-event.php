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
        <hr class="angular">
        <nav class="padd2 nav-angular">
            <a href="../myGuide.php#!directory-angularJS">Volver al directorio</a>
        </nav>
        <hr class="angular">
        <section class="section-angular padd5"on">
            <h4 class="text-center">Eventos</h4>
            <div class="padd2 exam-angular" ng-controller="myCtrl4">
                <button ng-click="clickSimple()">Click</button>
                <button ng-dblclick="doubleClick()">Double Click</button>
                <img src="../img/foto.jpg" width="200" height="200" ng-mouseleave="mouseLeaveImg()" ng-mouseenter="mouseOnImg()" >
                <br/><br/>
                <b>{{ evento }}</b>
            </div>
        </section>
        <hr class="angular">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            /* ============ myCtrl4 ============ */
            var myApp4 = angular.module( 'angular' , [] );
            myApp4.controller ('myCtrl4' , [ '$scope' , function($scope){
                $scope.clickSimple = function(){
                    $scope.evento = "Click";
                }
                $scope.doubleClick = function(){
                    $scope.evento = "Doble";
                }
                $scope.mouseLeaveImg = function(){
                    $scope.evento = "Mouse deja la imágen.";
                }
                $scope.mouseOnImg = function(){
                    $scope.evento = "Mouse entra en la imágen.";
                }
            }]);
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
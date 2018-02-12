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
            <h4 class="text-center">Cambiar estilos y propiedades</h4>
            <div class="padd2 example" ng-controller="myCtrl5">
                <br/><p ng-style="style">Texto que cambia de... <span ng-class="specialClass">color.</span></p><br/>
                <button ng-click="changeProperties()">Cambiar propiedades</button>
                <button ng-click="changeClass()">Cambiar color</button>
                <button ng-click="restoreClass()">Reiniciar clases</button>
                
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            /* ============ myCtrl5 ============ */
            var myApp5 = angular.module( 'angular' , [] );
            myApp5.controller ('myCtrl5' , [ '$scope' , function($scope){
                $scope.changeProperties = function(){
                    $scope.style = { "background" : "pink" , "color" : "black"};
                }
                $scope.changeClass = function(){
                    $scope.specialClass = "angular";
                }
                $scope.restoreClass = function(){
                    $scope.style = "";
                    $scope.specialClass = "";
                }
            }]);
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
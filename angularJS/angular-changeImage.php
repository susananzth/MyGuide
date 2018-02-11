<!DOCTYPE html>
<html lang="en" ng-app="angular">
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
        <section class="section-angular padd5" >
            <h4 class="text-center">Cambiar imágen</h4>
            <div class="padd2 exam-angular" ng-controller="myCtrl7">
                <img ng-src="{{actualImg}}" width="200" height="200"/>
                <br/><br/>
                <button ng-click="showImg('../img/foto.jpg')">Imágen 1</button>
                <button ng-click="showImg('../img/foto2.jpg')">Imágen 2</button>
                
            </div>
        </section>
        <hr class="angular">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            /* ============ myCtrl7 ============ */
            var myApp7 = angular.module( 'angular' , [] );
            myApp7.controller ('myCtrl7' , [ '$scope' , function($scope){
                $scope.actualImg = '../img/foto.jpg';
                    $scope.showImg = function(_img){
                        $scope.actualImg = _img;
                    }
            }]);
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
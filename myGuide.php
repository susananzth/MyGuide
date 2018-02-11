<!DOCTYPE html>
<html lang="en" ng-app="myGuide">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido en
                                            desarrollo profesional web."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="web developer, web design, frontend, backend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <title>My web development guide | by Susana Piñero</title>

        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script> -->
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script type="text/javascript" src="js/angular-route.min.js"></script>
    </head>
    <body>
        <!-- con ng-inclide, incluyo los partials que necesito -->
        <div ng-include src="'partials/header.php'"></div>
        <nav>
            <ul class="flex-container nav-primary">
                <li class="col-nav padd2"><a href="#!/">Home</a></li>
                <li class="col-nav padd2"><a href="#!directory-html">HTML</a></li>
                <li class="col-nav padd2"><a href="#!directory-php">PHP</a></li>
                <li class="col-nav padd2"><a href="#!directory-javascript">Javascript</a></li>
                <li class="col-nav padd2"><a href="#!directory-jQuery">jQuery</a></li>
                <li class="col-nav padd2"><a href="#!directory-angularJS">AngularJS</a></li>
                <li class="col-nav padd2"><a href="#!directory-bootstrap3">Bootstrap</a></li>
            </ul>
        </nav>
        
        <section class="section-angular padd5">
            <!-- ng-view indica que es aquí donde va a cargar los partials que escribí mas abajo -->
            <div ng-view></div>

        </section>
        
        <div ng-include src="'partials/footer.php'"></div>

        <script type="text/javascript">
            /* ngRoute es un servicio que esta accesible gracias a angular-route */
            var myGuide = angular.module('myGuide', ['ngRoute'])
            /* Comando config y dentro del arreglo coloco el servicio $routeProvider que permite cambiar las rutas de mi aplicación, y en la función coloco como parámetro el mismo $routeProvider que me devolverá un objeto que tiene acceso a la rtuta del navegador */
            myGuide.config(['$routeProvider', function($routeProvider){
                /* Aquí le digo a $routeProvider que afecte o se modifíque cuando suceda las siguientes situaciones. When búscara si hay esa ruta y sino caerá en el otherwise */
                $routeProvider
                    
                    .when('/',{
                        /* partialsUrl es un valor que me va a definir la ruta del partials que se va a mostrar dentro del ng-view */
                        templateUrl:'/myGuide.php'
                    })
                    .when('/directory-html',{
                        templateUrl:'partials/directory-html.php'
                    })
                    .when('/directory-php',{
                        templateUrl:'partials/directory-php.php'
                    })
                    .when('/directory-javascript',{
                        templateUrl:'partials/directory-js.php'
                    })
                    .when('/directory-jQuery',{
                        templateUrl:'partials/directory-jQuery.php'
                    })
                    .when('/directory-angularJS',{
                        templateUrl:'partials/directory-angularJS.php'
                    })
                    .when('/directory-bootstrap3',{
                        templateUrl:'partials/directory-bootstrap3.php'
                    })
                    .otherwise({
                    /* En caso de que no consiga a la url de when, utilizo un valor llamado redirecTo y llevará al usuario a la raiz de myGuide y luego lo llevara a la siguiente plantilla */
                    redirectTo:'/',
                    })
            }])
        </script>
        <!-- Aquí estoy colocando jQuery desde las librerias de google. En la dirección
             coloco // para solucionar el problema si la página web que estoy haciendo 
             es http o https  -->
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- En caso que haya fallado la carga de jQuery desde las librerias de google
             coloco la condición para que tome el jQuery desde mi carpeta. -->
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
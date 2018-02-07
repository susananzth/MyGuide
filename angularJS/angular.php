<!DOCTYPE html>
<html lang="en" ng-app="definiciones"><!--ng-app es una directiva que convierte este documento html en una aplicación angular-->
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Página web donde practiqué todo lo aprendido en
                                        desarrollo profesional web."/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
                                maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/fontRoboto.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>

    <title>My Guide</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
</head>
<body>
<?php
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angular.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5">
        <h4 class="text-center">Definiciones</h4>
        <div class="padd2 exam-angular">
            <h6>Procesos en tiempo real.</h6>
            <b>Muestro en un div aparte la información procesada que suministro en la caja de texto.</b>
            <div class="padd2" ng-controller="myCtrl">
                <p>Muestro el resultado de la cantidad de mangos que quiero multiplicado con su precio en un párrafo más abajo.</p><br/>
                <p>Precio de los mangos: {{500 | currency:"Bs."}}</p>
                <label for="quantity">Cantidad de mangos: 
                    <input id="quantity" type="number" name="quantity" placeholder="Cantidad" ng-model="quantity">
                </label>
                <p>
                    Total a pagar: <b>{{quantity}}</b><!--  -->
                </p>
            </div>
        </div>
        
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        var myApp = angular.modulo("definiciones" , []); /*Dentro de esta variable voy a declarar el modulo de mi app*/
        /*Declaramos nuestro controlador declarando una instancia de la app*/
        myApp.controller ("myCtrl" , ['$scope' , function($scope){
            /*Parámetros son: el nombre del controlador y el arreglo*/
            /*$scope es un elemento especial de angular que me permite acceder todos los elementos que estan al alcance de ng-controller=controller1*/
            /*function lo utilizo para recibir el objeto $scope para poder procesarlo desde mi controlador y poder modificar la información*/
            
                /*Valor inicial para la caja de texto de cantidad a través de ng-model*/
                $scope.quantity = 1;

            }]);
    </script>
    <?php
    include "../partials/bottom-page.php";
/**
 * User: Susana
 * Date: 2/6/2018
 * Time: 5:47 PM
 */
?>
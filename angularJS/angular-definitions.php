<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angular.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5" ng-app="definiciones">
        <h4 class="text-center">Definiciones</h4>
        <div class="padd2 exam-angular">
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
        <div class="padd2 exam-angular">
            <h6>Procesos en tiempo real.</h6>
            <b>Muestro en un div aparte la información procesada que suministro en la caja de texto.</b>
            <div class="padd2">
                <p>Muestro el nombre que ingreso en la caja de texto en un párrafo más abajo.</p><br/>
                <label for="name">Nombre: 
                    <input id="name" type="text" name="name" placeholder="Nombre" ng-model="name"><!-- Convierto la caja de texto en un modelo y todos los datos que incluyo en esta casilla será parte de la aplicación -->
                </label>
                <p>
                    Mi nombre es: <b>{{name}}</b><!-- Aquí muestro la información que suministro en la caja de texto que convertí en modelo en tiempo real -->
                </p>
            </div>
        </div>
        <div class="padd2" ng-controller="myCtrl1">
            <p>Muestro el resultado de la cantidad de mangos que quiero multiplicado con su precio en un párrafo más abajo.</p><br/>
            <p>Precio de los mangos: {{500 | currency:"Bs."}}</p>
            <label for="quantity">Cantidad de mangos: 
                <input id="quantity" type="number" name="quantity" placeholder="Cantidad" ng-model="quantity">
            </label>
            <p>
                Total a pagar: <b>{{quantity * price | currency:"Bs."}}</b><!--  -->
            </p>
        </div>
        <div class="padd2 exam-angular" ng-controller="myCtrl2">
            <h6>Colección de datos</h6>
            <b>Nombre:</b>
            <ul>
                <li ng-repeat = "nameIndividual in nameSimple">
                    {{ nameIndividual }}
                </li>
            </ul>
            <b>Héroes:</b>
            <ul>
                <li ng-repeat = "heroe in heroes">
                    {{ heroe.name }}  {{ heroe.lastname }}
                </li>
            </ul>
        </div>
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
    /* ============ myCtrl1 ============ */
        var myApp1 = angular.module('definiciones' , []); /*Dentro de esta variable voy a declarar el modulo de mi app*/
        /*Declaramos nuestro controlador declarando una instancia de la app*/
        myApp1.controller("myCtrl1" , ['$scope' , function($scope)
            /*Parámetros son: el nombre del controlador y el arreglo*/
            /*$scope es un elemento especial de angular que me permite acceder todos los elementos que estan al alcance de ng-controller=myCtrl*/
            /*function lo utilizo para recibir el objeto $scope para poder procesarlo desde mi controlador y poder modificar la información*/
            {
                /*Valor inicial para la caja de texto de cantidad a través de ng-model*/
                $scope.quantity = 0;
                $scope.price = 500;
            }]);
    ES_724_07_01/* ============ myCtrl2 ============ */
        var myApp2 = angular.module( 'definiciones' , [] );
        myApp2.controller ('myCtrl2' , [ '$scope' , function($scope){
            $scope.nameSimple = ["Alois" , "Ana" , "Juana"];
            $scope.heroes = [
                {name: "Arnol", lastname: "Perez"},
                {name: "Monica", lastname: "Gimenez"},
                {name: "Juana", lastname: "DeArco"}
            ]
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
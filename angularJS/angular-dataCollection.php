<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angularJS.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5" ng-app="datos">
        <h4 class="text-center">Colección de datos</h4>
        <div class="padd2 exam-angular" ng-controller="myCtrl2">
            <b>Nombres:</b>
            <ul>
                <li ng-repeat = "nameIndividual in nameSimple">
                    {{ nameIndividual }}
                </li>
            </ul>
            <br/>
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
        /* ============ myCtrl2 ============ */
        var myApp2 = angular.module( 'datos' , [] );
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
 * Date: 2/7/2018
 * Time: 5:47 PM
 */
?>
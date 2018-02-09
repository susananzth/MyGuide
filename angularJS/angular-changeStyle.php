<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angularJS.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5" ng-app="accion">
        <h4 class="text-center">Cambiar estilos y propiedades</h4>
        <div class="padd2 exam-angular" ng-controller="myCtrl5">
            <br/><p ng-style="style">Texto que cambia de... <span ng-class="specialClass">color.</span></p><br/>
            <button ng-click="changeProperties()">Cambiar propiedades</button>
            <button ng-click="changeClass()">Cambiar color</button>
            <button ng-click="restoreClass()">Reiniciar clases</button>
            
        </div>
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        /* ============ myCtrl5 ============ */
        var myApp5 = angular.module( 'accion' , [] );
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
    <?php
    include "../partials/bottom-page.php";
/**
 * User: Susana
 * Date: 2/7/2018
 * Time: 5:47 PM
 */
?>
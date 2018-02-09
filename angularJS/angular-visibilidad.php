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
        <h4 class="text-center">Cambiar visibilidad</h4>
        <div class="padd2 exam-angular" ng-controller="myCtrl6">
            <button ng-click="mostrar()">Revelar secreto</button>
            <button ng-click="ocultar()">Ocultar secreto</button>
            <br/><p class="alerta" ng-show="messagge">Mensaje secreto</p><br/>
            
        </div>
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        /* ============ myCtrl6 ============ */
        var myApp6 = angular.module( 'accion' , [] );
        myApp6.controller ('myCtrl6' , [ '$scope' , function($scope){
            $scope.messagge = false;
            $scope.mostrar = function(){
                $scope.messagge = true;
            }
            $scope.ocultar = function(){
                $scope.messagge = false;
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
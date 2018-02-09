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
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        /* ============ myCtrl4 ============ */
        var myApp4 = angular.module( 'accion' , [] );
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
    <?php
    include "../partials/bottom-page.php";
/**
 * User: Susana
 * Date: 2/7/2018
 * Time: 5:47 PM
 */
?>
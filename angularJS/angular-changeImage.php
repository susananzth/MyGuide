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
        <h4 class="text-center">Cambiar imágen</h4>
        <div class="padd2 exam-angular" ng-controller="myCtrl7">
            <img ng-src="{{actualImg}}" width="200" height="200"/>
            <br/><br/>
            <button ng-click="showImg('../img/foto.jpg')">Imágen 1</button>
            <button ng-click="showImg('../img/foto2.jpg')">Imágen 2</button>
            
        </div>
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        /* ============ myCtrl7 ============ */
        var myApp7 = angular.module( 'accion' , [] );
        myApp7.controller ('myCtrl7' , [ '$scope' , function($scope){
            $scope.actualImg = '../img/foto.jpg';
                $scope.showImg = function(_img){
                    $scope.actualImg = _img;
                }
        }]);
    </script>
    <?php
    include "../partials/bottom-page.php";
/**
 * User: Susana
 * Date: 2/8/2018
 * Time: 5:47 PM
 */
?>
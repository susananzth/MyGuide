<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angularJS.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5" ng-app="agenda">
        <h4 class="text-center">Guía telefónica</h4>
        <div class="padd2 exam-angular" ng-controller="myCtrl3">
            <label for="search">Búscar:
            <input id="search" ng-model="search" type="search" name="search" placeholder="Búsqueda">
            </label>
            <br/><br/>
            <p ng-repeat = " entrada in agenda | filter: search">
            <!-- Uso filter para que vaya mostrándome los nombres que coincida con lo que
             vaya escribiendo en la caja de texto. -->
                {{ entrada.name }} : {{ entrada.phone }}
            </p>
        </div>
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    ?>
    <script type="text/javascript">
        /* ============ myCtrl3 ============ */
        var myApp3 = angular.module( 'agenda' , [] );
        myApp3.controller ('myCtrl3' , [ '$scope' , function($scope){
            $scope.agenda = [
                {name: 'Ana', phone: '0416-127-5767'},
                {name: 'Pedro', phone: '0426-862-4638'},
                {name: 'Juan', phone: '0412-852-4538'},
                {name: 'Linda', phone: '0424-981-1374'},
                {name: 'Monica', phone: '0412-782-5691'}
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
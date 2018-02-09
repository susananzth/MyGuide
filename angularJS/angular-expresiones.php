<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="angular">
    <nav class="padd2 nav-angular">
        <a href="../directory-angularJS.php">Volver al directorio</a>
    </nav>
    <hr class="angular">
    <section class="section-angular padd5" ng-app>
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
    </section>
    <hr class="angular">
    <?php
    include "../partials/footer.php";
    include "../partials/bottom-page.php";
/**
 * User: Susana
 * Date: 2/6/2018
 * Time: 5:47 PM
 */
?>
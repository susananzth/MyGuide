<?php
include "partials/top_page.php";
include "partials/header.php";
?>
<hr class="js">
<?php
include "partials/nav-primary.php";
?>
<hr class="js">
<section class="section-js padd5">
    <h4>Usando JavaScript</h4>
    <div class="exam-js padd2">
            <h5>Directorio</h5>
            <ul class="padd2 li-noStyle">
                <li class="padd1"><a href="js/js-definitions.php">Definiciones</a></li>
            </ul>
    </div>
    ​<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
        Click me to display Date and Time.</button>

    <p id="demo"></p>
</section>
<hr class="js">
<?php
include "partials/footer.php";
include "partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 8/31/2017
 * Time: 9:06 PM
 */
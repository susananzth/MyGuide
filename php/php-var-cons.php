<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "../partials/nav.php";
include "functions/functions-var-cons.php";
?>
    <section class="php padd5">
        <h4>Variables y constantes</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de DEFINE()</h6>
            <div class="padd2">
                <p>Con DEFINE se almacena un espacio de la memoria del pc para esa constante
                mientras se ejecuta el programa. No se puede redefinir.</p><br>
                <?php
                    exampleDefineSimple()
                ?>
            </div>
        </div>
    </section>

<?php
include "../partials/footer.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 5:49 PM
 */
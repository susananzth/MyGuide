<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-var-cons.php";
?>
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">Variables y constantes</h4>
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
    <hr class="php">
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 5:49 PM
 */?>
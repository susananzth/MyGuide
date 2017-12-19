<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de formulario de login.</h6>
            <div class="padd2">
                <form id="form-login" action="php-partials/partials-login.php" method="post">
                    <label for="txt-user">Usuario:
                        <input id="txt-user" name="txt-user" type="text"
                               placeholder="Usuario" class="">
                    </label>
                    <label for="txt-pass">Contraseña:
                        <input id="txt-pass" name="txt-pass" type="text"
                               placeholder="Contraseña" class="">
                    </label>
                    <label for="btn-login">
                        <input id="btn-login" name="btn-login" type="submit" value="Iniciar sesión">
                    </label>
                </form>
            </div>
        </div>
    </section>
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/18/2017
 * Time: 8:13 PM
 */
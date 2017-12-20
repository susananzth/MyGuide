<?php
include "../partials/top_page.php";
include "../partials/header.php";

    //Renudamos la sesión antes del contenido y poder rescatar lo almacenado
    //la variable super global
    session_start();
    if(!isset($_SESSION["usuario"])){
        //Aquí redirigimos a la página de login en caso de no haber iniciado sesión.
        header("Location:php-login.php");
    }
?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Bienvenido.</h6>
            <div class="padd2">
                <?php
                    echo "Hola: " . $_SESSION["usuario"] . ".";
                ?>
            </div>
        </div>
    </section>
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/19/2017
 * Time: 8:27 PM
 */
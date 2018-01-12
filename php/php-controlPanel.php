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
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">MySQL</h4>
        <div class="padd2 exam-php">
            <h6>Bienvenido.</h6>
            <div class="padd2">
                <?php
                    echo "Hola: " . $_SESSION["usuario"] . ".";
                ?>
                <a href="php-partials/partials-logout.php"
                   hreflang="EN" type="text/html" >Cerrar sesión</a>
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
 * Date: 12/19/2017
 * Time: 8:27 PM
 */
?>
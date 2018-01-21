<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="jQuery">
    <nav class="padd2 nav-jQuery">
        <a href="../directory-jQuery.php">Volver al directorio</a>
    </nav>
    <hr class="jQuery">
    <section class="section-jQuery padd5">
        <h4 class="text-center">Agregar cartas</h4>
        <div class="padd2 exam-jQuery">
            <h6>Cambiar funtes con animación.</h6>
            <div class="padd2">
                <ul>
                    <li class="sizer"></li>
                </ul>
                <a class="showHide btn" type="button">Agregar una tarjeta</a>

            </div>
        </div>
    </section>
    <hr class="jQuery">
<?php
include "../partials/footer.php";
?>
    <!-- Aquí estoy colocando jQuery desde las librerias de google. En la dirección
         coloco // para solucionar el problema si la página web que estoy haciendo
         es http o https  -->
    <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- En caso que haya fallado la carga de jQuery desde las librerias de google
         coloco la condición para que tome el jQuery desde mi carpeta. -->
    <script type="text/javascript" rel="script">
        window.jQuery || document.write('<script type="text/javascript" rel="script" src="js/jquery-3.2.1.min.js"><\/script>')
    </script>
    <script type="text/javascript" rel="script">
        window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
    </script>
    <script>
        $(function () {

        })
    </script>
<?php
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 1/20/2018
 * Time: 6:57 PM
 */?>
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
        <h4 class="text-center">Ejemplos varios</h4>
        <div class="padd2 exam-jQuery">
            <h6>Cambiar fuentes con animación.</h6>
            <div class="padd2">
                <a href="#1" class="sizer">A</a>
                <a href="#1.5" class="sizer">A</a>
                <a href="#2" class="sizer">A</a>
                <p class="text">Texto que cambia de fuente con animación en jQuery.</p>
            </div>
        </div>
        <div class="padd2 exam-jQuery">
            <h6>Contador de likes.</h6>
            <div class="padd2 likes">
                <a href="#" class="up inline-b"></a>
                <p class="inline-b total">156</p>
                <a href="#" class="down inline-b"></a>
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
            function crearSizer(em) {
                return function () {
                    //le decimos que cambie el tamaño de la fuente a los elementos que
                    // tenga la clase .text por la cantidad de em que le envían por parámetro.
                   $('.text').css('font-size', em+'em');
                }
            }
            //Ciclo para recorrer los elementos ue tengan la clase .sizer.
            $('.sizer').each(function (i, link) {
                //Guarda en la variable 'em' lo que contengan en el hashtag los links
                //dentro del elemento en la clase .sizer, quitándole el primer caracter.
                var em =$(link).prop('hash').substring(1);
                $(link)
                //Cambia la fuente del link dependiendo de su hashtag.
                    .css('font-size', em+'em')
                    //Al hacer click en determinado link inicia la función crearSizer y envia el parámetro em.
                    .on('click', crearSizer(em));
            })
            $('.total').each(function (i, elem) {
                var contTotal = crearCont();
                $(elem)
                    .siblings('.up')
                    .on('click', function (ev) {
                        ev.preventDefault();
                        $(elem).html(contTotal.up());
                    })
            })


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
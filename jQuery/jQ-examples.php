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
            <h6>Contador de likes.<br/>Usando closures en jQuery.</h6>
            <div class="flex-container">
                <div class="padd2 likes col-4 text-center">
                    <p>Contador de likes 1.</p>
                    <a href="#" class="up inline-b"></a>
                    <p class="inline-b total">152</p>
                    <a href="#" class="down inline-b"></a>
                </div>
                <div class="padd2 likes col-4 text-center">
                    <p>Contador de likes 2.</p>
                    <a href="#" class="up inline-b"></a>
                    <p class="inline-b total">10</p>
                    <a href="#" class="down inline-b"></a>
                </div>
                <div class="padd2 likes col-4 text-center">
                    <p>Contador de likes 3.</p>
                    <a href="#" class="up inline-b"></a>
                    <p class="inline-b total">0</p>
                    <a href="#" class="down inline-b"></a>
                </div>
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
                    /*Le digo que cambie el tamaño de la fuente a los elementos que
                    tenga la clase .text por la cantidad de em que le envían por parámetro.*/
                   $('.text').css('font-size', em+'em');
                }
            }
            //Ciclo para recorrer los elementos ue tengan la clase .sizer.
            $('.sizer').each(function (i, link) {
                /*Guarda en la variable 'em' lo que contengan en el hashtag los links
                dentro del elemento en la clase .sizer, quitándole el primer caracter.*/
                var em =$(link).prop('hash').substring(1);
                $(link)
                //Cambia la fuente del link dependiendo de su hashtag.
                    .css('font-size', em+'em')
                    /*Al hacer click en determinado link inicia la función crearSizer y envia
                    el parámetro em.*/
                    .on('click', crearSizer(em));
            });
/*$=$=$=$=$=$=$=$ CLOSURES $=$=$=$=$=$=$=$*/
            /*Creo un clousure contador donde tiene variables internas que el resto del
            código no tiene para que puedan acceder a ellas y modificarlas.*/
            function crearCont(valorInicial) {
                /*Creo la variable contador y le doy el valor que me envía el parámetro
                de tenerlo sino utiliza cero.*/
                //El valor del parámetro lo obtengo de
                var cont = valorInicial || 0;
                //Devuelvo un objeto con dos métodos.
                return{
                    //La función up va a devolver el resultado de cont + 1.
                    up : function () {
                        return ++cont;
                    },
                    //La función down devuelve cont - 1.
                    down : function () {
                        return --cont;
                    }
                };
            };
            //A todos los elementos que tengan la clase .total, hacerle lo sieguiente.
            $('.total').each(function (i, elem) {
                /*Aqué creamos un contador para cada contador creado en crearCont(), es decir,
                si tenemos muchos posts cada uno con likes, esto manejará independiente cada contador
                de likes de los diferentes pots.*/
                var contTotal = crearCont(elem.innerHTML);/*Valor que envío como parámetro
                a la función crearCont() y lo toma del valor embebido del html de cada
                uno de los elementos con clase .total*/
                //A cada elemento...
                $(elem)
                    //Le pedimos los elementos hermanos (siblings) al a clase .total, en
                    //este caso nos interesa el que tiene la clase .up
                    .siblings('.up')
                        //Al elemento con la clase .up al hacerle click...
                        .on('click', function (ev) {
                            //Quitará el comportamiento por defecto de la etiqueta <a>
                            //que es el de recargar la página.
                            ev.preventDefault();
                            //Y en elemento donde me encuentro ahora mismo, es decir, la etiqueta <a>
                            //ejecuratá la función contTotal() en la parte up.
                            $(elem).html(contTotal.up());
                        })
                        //Mismo proceso que el .up, pero en el .down.
                    .siblings('.down')
                        .on('click', function (ev) {
                            ev.preventDefault();
                            $(elem).html(contTotal.down());
                        })
            });
        });
    </script>
<?php
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 1/20/2018
 * Time: 6:57 PM
 */?>
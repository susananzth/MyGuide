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
            <h6>Mostrar o ocultar formulario con un toggle.</h6>
            <div class="padd2">
                <a class="showHide btn" type="button">Agregar una tarjeta</a>
                <form class="form-jq">
                    <label for="cedula" class="label-jq">Cédula:
                        <input id="cedula" name="cedula" type="text" class=""
                               placeholder="  Ingrese la cédula">
                    </label>
                    <label for="name" class="label-jq">Nombre:
                        <input id="name" name="name" type="text" class=""
                               placeholder="  Ingrese el nombre">
                    </label>
                    <label for="lastname" class="label-jq">Apellido:
                        <input id="lastname" name="lastname" type="text" class=""
                               placeholder="  Ingrese el apellido">
                    </label>
                    <label for="phone" class="label-jq">Teléfono:
                        <input id="phone" name="phone" type="text" class=""
                               placeholder="  Ingrese el teléfono">
                    </label>
                    <label for="address" class="label-jq">Dirección:
                        <input id="address" name="address" type="text" class=""
                               placeholder="  Ingrese la dirección">
                    </label>
                    <input id="post" name="post" type="submit" class="post" value="Publicar">
                </form>
            </div>
            <hr class="jQ-hr">
            <h6>Aquí se van agregando las tarjeta.</h6>
            <div class="flex-container">

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
            //Aquí le indicamos que cuando clickee el botón con la clase 'showHide'
            //activará la función showForm.
            $(".showHide").on('click', showForm);
            function showForm() {
                //Aquí mostramos y ocultamos el formulario con una animación.
                $('form').slideToggle();
            }
            //Aquí le quitamos el comportamiento por defecto del sumit, que en este
            //caso es para que no se recargue la página.
            $('form').on('submit', sendForm);
            function sendForm(ev) {
                ev.preventDefault();
                //Aquí quiero obtener los datos introducidos en los textfield
                //para enviarlos a otro formulario como parámetros.
                /*Obtengo los datos de la caja name y lo guardo en la variable name*/
                var cedula = $('input[name=cedula]').val();
                var name = $('input[name=name]').val();
                var lastname = $('input[name=lastname]').val();
                var phone = $('input[name=phone]').val();
                var address = $('input[name=address]').val();
                //Aquí colocamos una plantilla para crear la tarjeta
                var template = '<div class="padd1 cardjQ col-4"><b>Tarjeta de '+name+' '+lastname+'.</b><div class="padd2"><p>Cédula: '+cedula+'.<br/>Teléfono: '+phone+'.<br/>Dirección: '+address+'.<br/></p></div></div>';
                //Aquí le decimos que genere la plantilla destro del div con la clase flex-container
                $('.flex-container').prepend(template);
                //Aquí borramos todos los datos en los textfield
                $('input[type=text]').val('');
                //Aquí ocultamos el formulario luedo de publicar.
                $('form').slideUp();
            }
        })
    </script>
<?php
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 1/20/2018
 * Time: 3:55 PM
 */?>
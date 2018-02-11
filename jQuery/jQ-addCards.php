<!DOCTYPE html>
<html lang="en" ng-app="jQuery">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre jQuery."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="jQuery, javascript, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of jQuery | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="jQuery">
        <nav class="padd2 nav-jQuery">
                <a href="../myGuide.php#!directory-jQuery">Volver al directorio</a>
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
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('jQuery' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    </body>
</html>
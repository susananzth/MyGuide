<!DOCTYPE html>
<html lang="en" ng-app="jQuery">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre jQuery."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="jQuery, javascript, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of jQuery | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
                <a href="../myGuide.php#!directory-jQuery">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <h4 class="text-center">Ocultar y mostrar elementos</h4>
            <div class="padd2 example">
                <h6>Hide and show elements | Ocultar y mostrar elementos</h6>
                <div class="padd2">
                    <b>Modificar html en un div con botones</b>
                    <p>
                        Ddonde tenemos dos botones y un texto. Al pulsar un botón,
                        cambiaremos el texto y al pulsar el otro pondremos otro texto distinto:
                    </p>
                    <div id="div-button" class="text-center">
                        Haz clic en un botón</div>
                    <div class="text-center">
                        <input id="button-a" type="button" value="Botón A" class="bttn">
                        <input id="button-b" type="button" value="Botón B" class="bttn">
                    </div>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Mostrar y ocultar un div enfocando un elemento</h6>
                <div class="padd2">
                    <p>
                    Ahora vamos a tener dos capas en nuestra página. Una capa estará
                    siempre visible y otra capa aparecerá inicialmente oculta y la vamos a mostrar u
                    ocultar dependiendo de si el usuario coloca el ratón encima de la capa que
                    está siempre visible:
                </p>
                <div id="capa" class="text-center">
                    Pon el ratón encima de esta capa</div>
                <div id="mensaje" style="display: none;" class="exam-jQuery text-center">
                    Has puesto el ratón encima!! <br>
                    (Ahora quítalo de la capa)</div>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Mostrar u ocultar un div con un swich</h6>
                <div class="padd2">
                    <form>
                    Nombre: <input type="text" name="nombre">
                    <br>
                    <input type="checkbox" name="mayor_edad" value="1" id="mayoria_edad">
                    Soy mayor de edad
                    <br>
                    <div id="formulariomayores" style="display: none;">
                        Dato para mayores de edad: <input type="text" name="mayores_edad">
                    </div>
                    </form>
                    <p>
                        Dónde:
                        Estas líneas sirven para especificar eventos.<br>
                        -$(document).ready(): se hace para lanzar instrucciones cuando el
                        navegador está preparado para recibirlas.<br>
                        -$("#mayoria_edad").click(): sirve para realizar acciones cuando
                        ha hecho clic sobre el #elemento con id "mayoria_edad", que es el
                        checkbox del formulario.<br>
                        -attr(): método para comprobar el estado del atributo "checked"
                        del elemento "#mayoria_edad".<br>
                        -Entonces, si estaba "checked", se ejecuta el css que muestrar
                        el elemento y si no ejecuta el css que lo oculta.
                    </p>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Cambiar clases css enfocando un elemento</h6>
                <div class="padd2">
                    <p>
                    Donde:<br>
                    <b>mouseover</b>: cuando el usuario coloca el puntero del ratón sobre el
                    enlace.<br>
                    <b>mouseout</b>: cuando el usuario retire el ratón del enlace.<br>
                    <b>addClass()</b>: añade una clase al elemento seleccionado.<br>
                    <b>removeClass()</b>: quita una clase al elemento seleccionado.<br>
                    <b>#ejemplo3</b>: id del elemento al que se le quiere aplicar la función.<br>
                    <b>examples</b>: clase que se desea manipular.
                </p><br>
                <a id="a-exa" href="#" rel="script">Prueba este ejemplo #3</a>
                <div id="ejemplo3" class="exam-jQuery">
                    Pon el ratón encima de esta capa</div>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Mostrar o ocultar formulario con un toggle.</h6>
                <div class="padd2">
                    <button class="showHide">Agregar</button>
                    <a class="showHide" type="button">Agregar</a>
                    <form class="form-jq">
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
                        <input id="post" name="post" type="submit" class="post" value="Publicar">
                    </form>
                </div>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('jQuery' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
        <script type="text/javascript" rel="script" src="js/jquery.js"></script>
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
                }
            })
        </script>
    </body>
</html>
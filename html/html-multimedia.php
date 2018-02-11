<!DOCTYPE html>
<html lang="en" ng-app="html5">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre HTML5."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="html, html5, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of HTML5 | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="html">
        <nav class="padd2 nav-html">
            <a href="../myGuide.php#!directory-html">Volver al directorio</a>
        </nav>
        <hr class="html">
        <section>
            <article class="section-html padd5">
                <div class="exam-html padd2">
                    <h4 class="title text-center">Images | Imágenes</h4>
                    <br>
                    <div class="flex-container">
                        <div class="item2">
                            <!-- UNA IMAGEN CON ESTILOS CSS -->
                            <p><b>EN:</b> An image with static high and wide.</p>
                            <p><b>ES:</b> Una imágen con alto y ancho estático.</p><br>
                            <a class="" href="#" target="_blank">
                                <img src="../img/web-desing.jpg" alt="Web desing | Diseño web"
                                     title="Web desing | Diseño web" width="370" height="280">
                            </a>
                        </div>
                        <div class="item2">
                            <!-- UNA IMAGEN CON LINK Y RESPONSIVA -->
                            <p><b>EN:</b> A picture with link and responsive size.</p>
                            <p><b>ES:</b> Una imágen con link y tamaño responsivo.</p><br>
                            <a class="" href="#" target="_blank">
                                <img src="../img/web-desing.jpg" alt="Web desing | Diseño web"
                                     title="Web desing | Diseño web" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <br><br>
                    <div class="flex-container">
                        <div class="col-4">
                            <!-- UNA IMAGEN REDONDEADA CON LINK y RESPONSIVA -->
                            <p><b>EN:</b> A picture with link and responsive size thumbnail.</p>
                            <p><b>ES:</b> Una imágen con link y tamaño responsivo thumbnail.</p><br>
                            <a class="" href="#" target="_blank">
                                <img src="../img/web-desing.jpg" alt="Web desing | Diseño web"
                                     title="Web desing | Diseño web"
                                     class="img-responsive img-thumbnail">
                            </a>
                        </div>
                        <div class="col-4">
                            <!-- UNA IMAGEN REDONDEADA CON LINK y RESPONSIVA -->
                            <p><b>EN:</b> A picture with link and responsive size rounded.</p>
                            <p><b>ES:</b> Una imágen con link y tamaño responsivo redondeado.</p><br>
                            <a class="" href="#" target="_blank">
                                <img src="../img/web-desing.jpg" alt="Web desing | Diseño web"
                                     title="Web desing | Diseño web"
                                     class="img-responsive img-rounded">
                            </a>
                        </div>
                        <div class="col-4">
                            <!-- UNA IMAGEN REDONDEADA CON LINK y RESPONSIVA -->
                            <p><b>EN:</b>An image with link and circular responsive size.</p>
                            <p><b>ES:</b> Una imágen con link y tamaño responsivo circular.</p><br>
                            <a class="" href="#" target="_blank">
                                <img src="../img/web-desing.jpg" alt="Web desing | Diseño web"
                                     title="Web desing | Diseño web"
                                     class="img-responsive img-circle">
                            </a>
                        </div>
                    </div>
                    <br>
                    <!-- UNA IMAGEN CON LINK EN AREAS ESPECIFICAS -->
                    <div class="padd2">
                        <p><b>EN:</b> The <b><u>&ltmap&gt</u></b> tag defines an area
                            inside an image-map.<br>
                            <u>type</u><em>= default, rect, circle y poly.</em><br>
                            Tool to generate map-area coordinates:
                            <a href="http://imagemap-generator.dariodomi.de/" rel="help"
                               target="_blank" type="text/html" media="all">
                                Imagemap-generator
                            </a><br>
                            More about map-area:
                            <a href="https://www.w3schools.com/tags/tag_area.asp"
                               rel="help" hreflang="EN" type="text/html" target="_blank"
                               class="">EN: W3schools</a><br><br>
                            <b>ES:</b> La etiqueta <b><u>&ltmap&gt</u></b> define
                            un área dentro de un mapa de imágenes.
                            <br><u>type</u>= <em>default, rect, circle y poly.</em><br>
                            Herramienta para generar coordenadas de map-area:
                            <a href="http://imagemap-generator.dariodomi.de/" rel="help"
                               target="_blank" type="text/html" media="all">
                                Imagemap-generator
                            </a><br>
                            Más acerca de map-area:
                            <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/area"
                               rel="help" hreflang="EN" type="text/html" target="_blank"
                               class="">ES: MDN</a>
                        </p><br>
                        <div class="text-center">
                            <img src="../img/ex_maparea.jpg" alt="Example of map - area"
                                 usemap="#example" class="text-center">
                            <map name="example">
                                <area shape="rect" coords="50,84,330,195" href="text.php"
                                      title="Shape rectangular" alt="Example rectangular">
                                <area shape="circle" coords="512,341,120" href="text.php"
                                      title="Shape circular" alt="Example circular">
                                <area title="Shape poly" alt="Example poly" shape="poly"
                                      coords="13,354,137,351,180,248,223,348,344,354,249,419,
                              284,524,180,467,79,524,110,422" href="text.php">
                            </map>
                        </div>
                    </div>
                </div>
            </article>
            <hr class="html">
            <article class="section-html padd5">
                <div class="exam-html padd2">
                    <h4 class="title">Music, Video | Audio, Vídeo</h4>
                    <div class="flex-container text-justify">
                        <!-- AUDIO -->
                        <div id="audio-en" class="col-12">
                            <p lang="EN" title="A audio"><b>EN:</b>
                                The <b><u>&ltaudio&gt</u></b>  tag is used to insert audio content into
                                an HTML or XHTML document.<br>
                                <em><u>Attributes:</u> arc, autoplay, controls, loop, muted, preload.</em>
                                <br>
                                <audio controls>
                                    <source src="../sound/Johnny_Fiasco-Transition__Stripped_Mix.mp3" type="audio/mpeg">
                                    Your browser does not support the audio tag.
                                </audio><br>
                                More about audios: <br>
                                <a href="https://www.w3schools.com/tags/tag_audio.asp"
                                   rel="help" hreflang="EN" type="text/html" target="_blank"
                                   class="btn">EN: W3schools</a>
                            </p>
                        </div>
                        <div id="audio-es" class="col-12">
                            <p lang="ES" title="Un audio"><b>ES:</b>
                                La etiqueta <b><u>&ltaudio&gt</u></b> se usa para insertar
                                contenido de audio en un documento HTML o XHTML.<br>
                                <em><u>Atributos:</u> arc, autoplay, controls, loop, muted, preload.</em>
                                <br>
                                <audio controls>
                                    <source src="../sound/Johnny_Fiasco-Transition__Stripped_Mix.mp3" type="audio/mpeg">
                                    Tu navegador no soporta archivos de audio.
                                </audio><br>
                                Más acerca de audios: <br>
                                <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/audio"
                                   rel="help" hreflang="ES" type="text/html" target="_blank"
                                   class="btn">ES: MDN</a>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <hr class="html">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('html5' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
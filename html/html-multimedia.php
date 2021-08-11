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
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-html">Volver al directorio</a>
        </nav>
        <hr/>
        <section>
            <article class="section padd5">
                <div class="padd2">
                    <h4 class="title">Music, Video | Audio, Vídeo</h4>
                    <div class="flex-container text-justify">
                        <!-- AUDIO -->
                        <div id="audio-en" class="col-12 example">
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
                        <div id="audio-es" class="col-12 example">
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
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('html5' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
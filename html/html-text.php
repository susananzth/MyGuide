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

        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script> -->
        <script type="text/javascript" src="../js/angular.min.js"></script>
        <script type="text/javascript" src="../js/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-html">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section">

            <article class="padd5">
                <div>
                    <h4 class="title text-center">Columns | Columnas</h4>
                    <div class="flex-container text-justify">
                        <div class="col-12 example">
                            <b>Col 12</b>
                            <p class=""><b><u>EN: Flexible boxes or flexbox</u></b>,
                                is a new layout mode in CSS3.
                                <br>
                                Use of flexbox ensures that elements behave predictably when the
                                page layout must accommodate different screen sizes and different
                                display devices.</p>
                        </div>
                        <div class="col-8 example">
                            <b>Col 8</b>
                            <p class=""><b><u>ES: Las cajas flexibles o flexbox</u></b>,
                                es un nuevo modo de disposición en CSS3.
                                <br>
                                El uso de flexbox asegura que los elementos se comporten de manera
                                predecible cuando el diseño de la página debe acomodar diferentes
                                tamaños de pantalla y diferentes dispositivos de visualización.</p>
                        </div>
                        <div class="col-4 example">
                            <b>Col 4</b>
                            <p class=""><b><u>CSS3 Flexbox</u></b>
                                For more uses and examples: <br>
                                <a href="https://www.w3schools.com/css/css3_flexbox.asp"
                                   rel="help" target="_blank" class="btn" hreflang="en"
                                   type="text/html">
                                    Ejemplos
                                </a></p>
                        </div>
                        <div class="item1 example">
                            <b>Item 1</b>
                            <p class=""><b><u>EN: Flexible boxes or flexbox</u></b>,
                                is a new layout mode in CSS3.
                                <br>
                                Use of flexbox ensures that elements behave predictably when the
                                page layout must accommodate different screen sizes and different
                                display devices.</p>
                        </div>
                        <div class="item2 example">
                            <b>Item 2</b>
                            <p class=""><b><u>ES: Las cajas flexibles o flexbox</u></b>,
                                es un nuevo modo de disposición en CSS3.
                                <br>
                                El uso de flexbox asegura que los elementos se comporten de manera
                                predecible cuando el diseño de la página debe acomodar diferentes
                                tamaños de pantalla y diferentes dispositivos de visualización.</p>
                        </div>
                        <div class="item3 example">
                            <b>Item 3</b>
                            <p class=""><b><u>CSS3 Flexbox</u></b>
                                For more uses and examples: <br>
                                <a href="https://www.w3schools.com/css/css3_flexbox.asp"
                                   rel="help" target="_blank" class="btn" hreflang="en"
                                   type="text/html">
                                    Ejemplos
                                </a></p>
                        </div>
                    </div>
                </div>
            </article>
            <hr class="html">
            <article class="padd5">
                <h4 class="title text-center">Unordered list | Lista desordenada</h4>
                <div class="flex-container">
                    <div class="item2 example">
                        <h6>Square | Cuadrado</h6>
                        <ul class="square padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ul>
                    </div>
                    <div class="item2 example">
                        <h6>Disc | Disco</h6>
                        <ul class="padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ul>
                    </div>
                    <div class="item2 example">
                        <h6>Circle | Círculo</h6>
                        <ul class="circle padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ul>
                    </div>
                </div>
            </article>
            <hr class="html">
            <article class="section-html padd5">
                <h4 class="title text-center">Ordered Lists | Lista ordenada</h4>
                <div class="flex-container">
                    <div class="col-4 example">
                        <h6>Decimal</h6>
                        <ol class="padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                    <div class="col-4 example">
                        <h6>Zero | Cero</h6>
                        <ol class="zero padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                    <div class="col-4 example">
                        <h6>Upper Latin</h6>
                        <ol class="latin padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                    <div class="col-4 example">
                        <h6>Lower Latin</h6>
                        <ol class="l-latin padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                    <div class="col-4 example">
                        <h6>Upper Roman</h6>
                        <ol class="roman padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                    <div class="col-4 example">
                        <h6>Lower Roman</h6>
                        <ol class="l-roman padd35px">
                            <li>Element 1</li>
                            <li>Element 2</li>
                            <li>Element 3</li>
                            <li>Element 4</li>
                        </ol>
                    </div>
                </div>
            </article>
            <hr class="html">
            <article class="padd5">
                <h4 class="title text-center">Table | Tablas</h4>
                <p>Ejemplo de una tabla con columnas y filas combinadas</p>
                <table class="combinate col-border-html">
                    <tr>
                        <td>Fila 1, columna 1</td>
                        <td colspan="3"> Fila 1, columnas 2, 3 y 4</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Fila 2, columna 1 + Fila 3, columna 1</td>
                        <td>Fila 2 columna 2</td>
                        <td>Fila 2 columna 3</td>
                        <td>Fila 2 columna 4</td>
                    </tr>
                    <tr>
                        <td>Fila 3 columna 2</td>
                        <td>Fila 3 columna 3</td>
                        <td>Fila 3 columna 4</td>
                    </tr>
                </table>
            </article>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('html5' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>

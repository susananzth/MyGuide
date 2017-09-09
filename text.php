<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" rel="script" src="js/javascript.js"></script>
    <title>My Guide</title>
</head>
<body>
<header class="text-center">
    <div class="bg-header">
        <h1>My Guide</h1>
        <h3>by Susana Piñero</h3>
    </div>
</header>
<hr>
<nav>
    <ul class="flex-container nav">
        <li class="col-2 padd2"><a href="index.php">Home</a></li>
        <li class="col-2 padd2"><a href="text.php">Text</a></li>
        <li class="col-2 padd2"><a href="link.php">Links</a></li>
        <li class="col-2 padd2"><a href="multimedia.php">Multimedia</a></li>
        <li class="col-2 padd2"><a href="formulario.php">Forms</a></li>
    </ul>
</nav>
<hr>
<section id="headding" class="padd2">
    <div class="">
        <h4 class="title text-center">Heading elements | Títulos</h4>
        <div class="text-center">
            <h1>h1 heading | Título h1</h1>
            <h2>h2 heading | Título h2</h2>
            <h3>h3 heading | Título h3</h3>
            <h4>h4 heading | Título h4</h4>
            <h5>h5 heading | Título h5</h5>
            <h6>h6 heading | Título h6</h6>
        </div>
    </div>
</section>
<hr>
<section id="texts" class="padd2">
    <h4 class="title text-center">Texts, Paragraphs | Textos, Párrafos</h4>
    <div class="col-border marg2 padd1">
        <b>EN: This is bold text. The <b><u>&ltb&gt</u></b> tag specifies a bold text.</b>
        <br> <b>ES: Esto es un texto en negrita. La etiqueta <b><u>&ltb&gt</u></b>
            especifica el texto en negrita.</b>
    </div>
    <div class="col-border marg2 padd1">
        <em><b>EN:</b> This is bold text. The &ltb&gt tag specifies bold text.</em><br>
        <em><b>ES:</b> Esto es un texto en negrita. La etiqueta &ltb&gt especifíca
            texto en negrita.</em>
    </div>
    <div class="col-border marg2 padd1">
        <u><b>EN:</b> This is bold text. The &ltb&gt tag specifies bold text.</u><br>
        <u><b>ES:</b> Esto es un texto en negrita. La etiqueta &ltb&gt especifica
            texto en negrita.</u>
    </div>
    <div id="paragraphs" class="col-border marg2 padd1">
        <!-- UN PARRAFO CON SUS ATRIBUTOS -->
        <p id="paragraph-en" lang="EN" title="A paragraph."><b>EN:</b>
            This is a paragraphs. The <b><u>&ltp&gt</u></b> tag specifies a paragraphs.
            <u>Attributes:</u> <b>id:</b> unique name. <b>title:</b> a tool tip.
            <b>lang:</b> language code.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi viverra ex non nunc dignissim molestie.</p><br>
        <p id="paragraph-es" lang="ES" title="Un párrafo"><b>ES:</b> Esto es un párrafo.
            La etiqueta <b><u>&ltp&gt</u></b> especifica un párrafo.
            <u>Atributos:</u> <b>id:</b> nombre único. <b>title:</b> un tool tip.
            <b>lang:</b> languaje de la cita.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra
            ex non nunc dignissim molestie.</p>
    </div>
    <div class="col-border marg2 padd1">
        <!-- UNA CITA CON SUS ATRIBUTOS -->
        <blockquote id="blockq-en" title="A blockquote."
                    cite="https://www.w3schools.com/tags/tag_blockquote.asp">
            <b>EN:</b> A section that is quoted from another source.
            The <b><u>&ltblockquote&gt</u></b> tag specifies a quoted.<br>
            <u>Attributes:</u> <b>cite:</b> URL, specifies the source of the quotation.
            <b>id:</b> unique name. <b>title:</b> a tool tip. <b>lang:</b> language code.
            More about blockquote:
            <a href="https://www.w3schools.com/tags/tag_blockquote.asp"
               rel="help" hreflang="EN" type="text/html" target="_blank" >EN: w3schools</a>
        </blockquote><br>
        <blockquote id="blockq-es" title="Un blockquote 'Cita'."
                    cite="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/blockquote">
            <b>ES:</b> Una sección que se cita de otra fuente.
            La etiqueta <b><u>&ltblockquote&gt</u></b> especifica una cita.<br>
            <u>Atributos:</u> <b>cite:</b> URL, enlace al documento original o fuente.
            <b>id:</b> nombre único. <b>title:</b> un tool tip.
            <b>lang:</b> languaje de la cita. Más acerca de blockquote:
            <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/blockquote"
               rel="help" hreflang="ES" type="text/html" target="_blank">ES: MDN</a>
        </blockquote>
    </div>
</section>
<hr>
<section id="columns" class="padd2">
    <div>
        <h4 class="title text-center">Columns | Columnas</h4>
        <div class="flex-container text-justify col-border">
            <div class="col-12 col-border">
                <b>Col 12</b>
                <p class=""><b><u>EN: Flexible boxes or flexbox</u></b>,
                    is a new layout mode in CSS3.
                    <br>
                    Use of flexbox ensures that elements behave predictably when the
                    page layout must accommodate different screen sizes and different
                    display devices.</p>
            </div>
            <div class="col-8 col-border">
                <b>Col 8</b>
                <p class=""><b><u>ES: Las cajas flexibles o flexbox</u></b>,
                    es un nuevo modo de disposición en CSS3.
                    <br>
                    El uso de flexbox asegura que los elementos se comporten de manera
                    predecible cuando el diseño de la página debe acomodar diferentes
                    tamaños de pantalla y diferentes dispositivos de visualización.</p>
            </div>
            <div class="col-4 col-border">
                <b>Col 4</b>
                <p class=""><b><u>CSS3 Flexbox</u></b>
                    For more uses and examples: <br>
                    <a href="https://www.w3schools.com/css/css3_flexbox.asp"
                                 rel="help" target="_blank" class="btn" hreflang="en"
                       type="text/html">
                        Ejemplos
                    </a></p>
            </div>
            <div class="item1 col-border">
                <b>Item 1</b>
                <p class=""><b><u>EN: Flexible boxes or flexbox</u></b>,
                    is a new layout mode in CSS3.
                    <br>
                    Use of flexbox ensures that elements behave predictably when the
                    page layout must accommodate different screen sizes and different
                    display devices.</p>
            </div>
            <div class="item2 col-border">
                <b>Item 2</b>
                <p class=""><b><u>ES: Las cajas flexibles o flexbox</u></b>,
                    es un nuevo modo de disposición en CSS3.
                    <br>
                    El uso de flexbox asegura que los elementos se comporten de manera
                    predecible cuando el diseño de la página debe acomodar diferentes
                    tamaños de pantalla y diferentes dispositivos de visualización.</p>
            </div>
            <div class="item3 col-border">
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
</section>
<hr>
<section id="unordered" class="padd2">
        <h4 class="title text-center">Unordered list | Lista desordenada</h4>
        <div class="flex-container col-border">
            <div class="item2 col-border">
                <h6>Square | Cuadrado</h6>
                <ul class="square padd35px">
                    <li>Element 1</li>
                    <li>Element 2</li>
                    <li>Element 3</li>
                    <li>Element 4</li>
                </ul>
            </div>
            <div class="item2 col-border">
                <h6>Disc | Disco</h6>
                <ul class="padd35px">
                    <li>Element 1</li>
                    <li>Element 2</li>
                    <li>Element 3</li>
                    <li>Element 4</li>
                </ul>
            </div>
            <div class="item2 col-border">
                <h6>Circle | Círculo</h6>
                <ul class="circle padd35px">
                    <li>Element 1</li>
                    <li>Element 2</li>
                    <li>Element 3</li>
                    <li>Element 4</li>
                </ul>
            </div>
        </div>
</section>
<hr>
<section id="ordered" class="padd2">
    <h4 class="title text-center">Ordered Lists | Lista ordenada</h4>
    <div class="flex-container col-border">
        <div class="col-4 col-border">
            <h6>Decimal</h6>
            <ol class="padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
        <div class="col-4 col-border">
            <h6>Zero | Cero</h6>
            <ol class="zero padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
        <div class="col-4 col-border">
            <h6>Upper Latin</h6>
            <ol class="latin padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
        <div class="col-4 col-border">
            <h6>Lower Latin</h6>
            <ol class="l-latin padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
        <div class="col-4 col-border">
            <h6>Upper Roman</h6>
            <ol class="roman padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
        <div class="col-4 col-border">
            <h6>Lower Roman</h6>
            <ol class="l-roman padd35px">
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
            </ol>
        </div>
    </div>
</section>
<hr>
<section id="table" class="padd2 text-center">
    <h4 class="title">Table | Tablas</h4>
    <p>Ejemplo de una tabla con columnas y filas combinadas</p>
    <table class="combinate">
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
</section>
<hr>
<footer id="footer" class="padd2">
    <!-- ETIQUETA PARA COLOCAR DIRECCION DE CONTACTO -->
    <address>Correo: <a href="mailto:susananzth@gmail.com" target="_top">
                        susananzth@gmail.com</a></address>
</footer>
</body>
</html>
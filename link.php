<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
<section id="links" class="padd2">
    <div>
        <h4 class="title text-center">Links | Enlaces</h4>
        <div class="flex-container text-justify col-border">
            <!-- LINKS DEFINICION -->
            <div id="link-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    The <b><u>&lta&gt</u></b> tag creates a link to other internet
                    pages, files or locations within the same page, email addresses,
                    or any other URL. More about links: <br>
                    <a href="https://www.w3schools.com/tags/att_a_rel.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="btn">EN: W3schools</a>
                    <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/a"
                       rel="help" hreflang="ES" type="text/html" target="_blank"
                       class="btn">ES: MDN</a>
                </p>
            </div>
            <div id="link-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    La etiqueta <b><u>&lta&gt</u></b> crea un enlace a otras páginas
                    de internet, archivos o ubicaciones dentro de la misma página,
                    direcciones de correo, o cualquier otra URL.
                    Más acerca de links: <br>
                    <a href="https://www.w3schools.com/tags/att_a_rel.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="btn">EN: W3schools</a>
                    <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/a"
                       rel="help" hreflang="ES" type="text/html" target="_blank"
                       class="btn">ES: MDN</a>
                </p>
            </div>
            <div class="col-12 col-border text-center">
                <h6>Attributes | Atributos</h6>
            </div>
            <!-- UN LINK QUE DESCARGA UN ARCHIVO -->
            <div id="a-download-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>download:</b> This attribute tells browsers to download a
                    URL instead of navigating to it.<br>
                    <a class="btn" href="img/fondo_cafe.jpg" type="image/jpg" target="_blank"
                       download>Download</a><br>
                    A link-image to download a file:<br>
                    <a href="img/fondo_cafe.jpg" target="_blank" download>
                        <img class="img-circle" src="img/fondo_cafe.jpg" alt="Taza de café"
                             width="140" height="110"></a>
                    <br>More about download:
                    <a href="https://www.w3schools.com/tags/att_a_download.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <div id="a-download-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>download:</b> Este atributo, indica a los navegadores descargar
                    una URL en lugar de navegar hacia ella.
                    <a class="btn" href="img/fondo_cafe.jpg" type="image/jpg" target="_blank"
                       download>Descargar</a><br>
                    Un link-imagen para descargar un archivo:<br>
                    <a href="img/fondo_cafe.jpg" target="_blank" download>
                        <img class="img-circle" src="img/fondo_cafe.jpg" alt="Taza de café"
                             width="140" height="110"></a>
                    <br>Más acerca de download:
                    <a href="https://www.w3schools.com/tags/att_a_download.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <!-- ATRIBUTO HREF Y HREFLANG -->
            <div id="a-href-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>href:</b> This attribute specifies the link's destination.<br>
                    More about href:
                    <a href="https://www.w3schools.com/tags/att_a_href.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a><br><br>
                    <b>hreflang:</b> This attribute specifies the language of the
                    document in the link.<br>
                    More about hreflang:
                    <a href="https://www.w3schools.com/tags/att_a_download.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <div id="a-href-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>href:</b> Este atributo especifica el destino del enlace.<br>
                    Más acerca de href:
                    <a href="https://www.w3schools.com/tags/att_a_href.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a><br><br>
                    <b>hreflang:</b> Este atributo especifica el idioma del documento
                    en el enlace.<br>
                    Más acerca de hreflang:
                    <a href="https://www.w3schools.com/tags/att_a_download.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <!-- LINK DONDE ESPECIFICA QUE RELACION TIENE EL LINK CON LA PAGINA -->
            <div id="rel-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>rel:</b> This attribute specifies the relationship of the target
                    object to the binding object.<br>
                    <em>rel=alternate, author, bookmark,
                        external, help, license, next, nofollow, noreferrer,
                        noopener, prev, search, tag.</em><br>
                    More about rel:
                    <a href="https://www.w3schools.com/tags/att_a_rel.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a> |
                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: MDN</a>
                </p>
            </div>
            <div id="rel-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>rel:</b> Este atributo especifica la relación del objeto
                    de destino con el objeto de enlace.<br>
                    <em>rel=alternate, author, bookmark,
                        external, help, license, next, nofollow, noreferrer,
                        noopener, prev, search, tag.</em><br>
                    Más acerca de rel:
                    <a href="https://www.w3schools.com/tags/att_a_rel.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a> |
                    <a href="https://developer.mozilla.org/es/docs/Web/HTML/Tipos_de_enlaces"
                       rel="help" hreflang="ES" type="text/html" target="_blank"
                       class="">ES: MDN</a>
                </p>
            </div>
            <!-- UN LINK QUE ABRE EN OTRA PESTAÑA -->
            <div id="target-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>target:</b> This attribute specifies where to open
                    the linked document<br>
                    <em>target=_blank, _parent, _self, _top, framename.</em><br>
                    More about target:
                    <a href="https://www.w3schools.com/tags/att_a_target.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <div id="target-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>target:</b> Este atributo especifica dónde abrir el
                    documento vinculado.<br>
                    <em>target=_blank, _parent, _self, _top, framename.</em><br>
                    Más acerca de target:
                    <a href="https://www.w3schools.com/tags/att_a_target.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <!-- UN LINK QUE ESPECIFICA EN QUE DISPOSITIVO ESTA OPTIMIZADO -->
            <div id="media-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>media:</b> This attribute specifies what media/device
                    the linked document is optimized for<br>
                    <em>media=all, aural, braille, handheld, projection,
                        print, screen, tty, tv.</em><br>
                    More about media:
                    <a href="https://www.w3schools.com/tags/att_a_media.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <div id="media-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>media:</b> Este atributo especifica qué medio/dispositivo
                    está optimizado para el documento vinculado.<br>
                    <em>media=all, aural, braille, handheld, projection,
                        print, screen, tty, tv.</em><br>
                    Más acerca de media:
                    <a href="https://www.w3schools.com/tags/att_a_media.asp"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: W3schools</a>
                </p>
            </div>
            <!-- UN LINK QUE ESPECIFICA EL TIPO DE ARCHIVO DEL LINK -->
            <div id="type-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    <b>type:</b> This attribute specifies specifies the
                    Internet media type of the linked document.<br>
                    <em>type=application, audio, font, example, image, message,
                        model, multipart, text, video.</em><br>
                    More about type:
                    <a href="http://www.iana.org/assignments/media-types/media-types.xhtml"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: iana</a>
                </p>
            </div>
            <div id="type-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    <b>type:</b> Este atributo especifica el tipo de medio de Internet
                    del documento vinculado.<br>
                    <em>type=application, audio, font, example, image, message,
                        model, multipart, text, video.</em><br>
                    Más acerca de type:
                    <a href="http://www.iana.org/assignments/media-types/media-types.xhtml"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: iana</a>
                </p>
            </div>
            <div class="col-12 col-border text-center">
                <h6>Other uses | Otros usos</h6>
            </div>
            <!-- UN LINK QUE EJECUTA UN CODIGO JAVASCRIPT -->
            <div id="javas-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    A link with a JavaScript message.<br>
                    <a href="javascript:alert('Hello World!');"
                       rel="alternate" hreflang="EN" type="text/javascript"
                       class="btn">Execute JavaScript</a>
                </p>
            </div>
            <div id="javas-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    Un link con un mensaje de JavaScript.<br>
                    <a href="javascript:alert('Hola Mundo!');"
                       rel="alternate" hreflang="ES" type="text/javascript"
                       class="btn" >Ejecutar JavaScript</a>
                </p>
            </div>
            <!-- UN LINK QUE LLEVA A OTRA SECCION DE LA PAGINA -->
            <div id="bookmark-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    A link that leads to another element of the page.<br>
                    <a href="#foo-en" id="ft-en" hreflang="EN" type="text/html"
                       rel="bookmark" class="btn">Go to footer</a>
                </p>
            </div>
            <div id="bookmark-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    Un link que lleva a otro elemento de la página.<br>
                    <a href="#foo-es" id="ft-es" hreflang="ES" type="text/html"
                       rel="bookmark" class="btn">Ir al footer</a>
                </p>
            </div>
            <!-- UN LINK PARA ENVIAR MENSAJE A UN CORREO -->
            <div id="mailto-en" class="col-6 col-border">
                <p lang="EN" title="A link"><b>EN:</b>
                    This is a link that sends an email.<br>
                    <a href="mailto:susananzth@gmail.com?Subject=Hello%20again"
                       target="_top" class="btn">Send E-mail</a><br>
                    More examples of mailto:
                    <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/
                             Introduction_to_HTML/Creating_hyperlinks#E-mail_links"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: MDN</a>
                </p>
            </div>
            <div id="mailto-es" class="col-6 col-border">
                <p lang="ES" title="Un link"><b>ES:</b>
                    Este es un link que envia un correo.<br>
                    <a href="mailto:susananzth@gmail.com?Subject=Hello%20again"
                       target="_top" class="btn">Enviar E-mail</a><br>
                    Más ejemplos de mailto:
                    <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/
                             Introduction_to_HTML/Creating_hyperlinks#E-mail_links"
                       rel="help" hreflang="EN" type="text/html" target="_blank"
                       class="">EN: MDN</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include "partials/footer.php";
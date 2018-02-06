<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
    <hr class="js">
    <nav class="padd2 nav-js">
        <a href="../directory-js.php">Volver al directorio</a>
    </nav>
    <hr class="js">
    <section class="section-js padd5">
        <h4 class="text-center">Definiciones</h4>
        <div class="padd2 exam-js">
            <h6>Variables</h6>
            <p class="padd2">
                Las siguientes variables tienen nombres correctos:<br>
                 var $numero1;<br>
                 var _$letra;<br>
                 var $$$otroNumero;<br>
                 var $_a__$4;<br>
            </p>
        </div>
        <div class="padd2 exam-js">
            <h6>Agregando saltos de lineas y comillas en un alert</h6>
            <p class="padd2">
                var mensaje = "¡Hola Mundo!\n Qué fácil es incluis \'comillas simples\'\n y \"comillas dobles\"<br>
                alert(mensaje);<br>
                alert("Soy el segundo alert :)");
            </p>
        </div>
        <div class="padd2 exam-js">
            <h6>Arreglos</h6>
            <p class="padd2">
                var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            </p>
        </div>
        <div class="padd2 exam-js">
            <h6>Imprimir un arreglo con un while</h6>
            <p class="padd2">
                var i=0;<br>
                while (i<=11){<br>
                    alert(meses[i]);<br>
                    ++i;<br>
                }
            </p>
        </div>
        <div class="padd2 exam-js">
            <h6>Matematica</h6>
            <p class="padd2">
                let x = 4;<br>
                x += 2; <b>x equals 6</b><br><br>

                let y = 4;<br>
                y -= 2; <b>y equals 2</b><br><br>

                let z = 4;<br>
                z *= 2; <b>z equals 8</b><br><br>

                let r = 4;<br>
                r++; <b>r equals 5</b><br><br>

                let t = 4;<br>
                t--; <b>t equals 3</b><br><br>

                  let molecule = 16;<br>
                  let particle = 18;<br>
                  let assay = 3;<br><br>

                  <b>Add and assign to molecule below</b><br>
                  molecule += 16;<br><br>

                  <b>Multiply and assign to particle below</b><br>
                  particle *=6.02;<br><br>

                  <b>Increment assay by 1</b><br>
                  assay++;
            </p>
        </div>
    </section>
    <hr class="js">
    <?php
    include "../partials/footer.php";
    include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:25 PM
 */
?>
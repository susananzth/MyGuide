<?php
include "partials/top_page.php";
include "partials/header.php";
?>
    <hr class="one">
<?php
include "partials/nav.php";
?>
    <hr class="one">
    <section>
        <h3>Hola</h3>
        <div>
            <ol>
                <li><a id="text-button" href="">Textos</a></li>

            </ol>
        </div>
    </section>
    <hr class="one">
    <div id="section">

    </div>

    <hr class="one">
<?php
include "partials/footer.php";
?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#text-button").click(function() {
                $.get("formulario.php", function (htmlexterno) {
                    $("#section").html(htmlexterno);
                });
                $(function(){
                    $("#section").load("formilario.php"); });
                $.ajax({
                    type: "GET",
                    url: "../MyGuyde/formulario.php",
                    success: function(datos) {
                        $("#section").html(datos);
                    }
                })
            }
            $(function(){
                $("#section").load("../formilario.php"); });


        }
    </script>
<?php
include "partials/bottom-page.php";
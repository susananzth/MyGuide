<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
<hr class="html">
<section class="section-html padd5">
    <div class="padd2">
        <a href="../directory-html.php">Volver al directorio</a>
    </div>
    <div class="exam-html padd2">
        <h4 class="title text-center">Ejemplo de un formulario</h4>
        <form action="miScript.php" method="GET">
            <label for="to">Para: <input id="to" type="email"></label>
            <label for="topic">Temática:
                <select id="topic" name="topic">
                    <option>-- Elige un tema --</option>
                    <option value="proposal">Propuesta</option>
                    <option value="report">Reporte</option>
                    <option value="other">Otro</option>
                </select>
            </label>
            <label for="subject">Asunto: <input id="subject" name="subject" type="text"></label>
            <label for="body">Cuerpo: <textarea id="body" name="body"></textarea></label>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
<hr class="html">
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";
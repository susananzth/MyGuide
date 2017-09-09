<?php
include "partials/top_page.php";
include "partials/header.php";
include "partials/nav.php";
?>
<section>
    <div>
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

<?php
include "partials/footer.php";
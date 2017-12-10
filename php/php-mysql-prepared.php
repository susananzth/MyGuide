<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-mysql.php";

?>
    <section class="php padd5">
        <h4>MySQL</h4>
        <div class="exam-php">
            <ul class="padd2">
                <li><a href="../php-directory.php">Volver al directorio</a></li>
            </ul>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formuario de búsqueda con consultas preparadas.</h6>
            <div class="padd2">
                <form id="form-searchPrepared" action="php-partials/partials-mysql-searchPrepared.php" method="get">
                    <label for="txt-searchP">Búscar:
                        <input id="txt-searchP" name="txt-searchP" type="text"
                               placeholder="Búsqueda" class="">
                    </label>
                    <label for="btn-searchP">
                        <input id="btn-searchP" name="btn-searchP" type="submit" value="Búscar">
                    </label>
                </form>
                <p><b>Primer paso:</b> la sentencia sql ya no sería asi:
                    <br><i>$query_search = "select * from usuarios where nombre like'%$search%'";</i>
                    <br>sino así:
                    <br><i>$query_search = "select * from usuarios where nombre = ?";</i>
                    <br>Se cambia la variable como parámetro y se coloca el signo de interrogación.
                </p>
            </div>
        </div>
    </section>
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/10/2017
 * Time: 5:46 PM
 */
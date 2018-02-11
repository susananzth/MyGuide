<?php
include "functions/functions-mysql.php";
?>
<!DOCTYPE html>
<html lang="en" ng-app="php">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre php."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="php, web developer, backend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of php | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="php">
        <nav class="padd2 nav-php">
                <a href="../myGuide.php#!directory-php">Volver al directorio</a>
        </nav>
        <hr class="php">
        <section class="section-php padd5">
            <h4 class="text-center">MySQL</h4>
            <div class="padd2 exam-php">
                <h6>Ejemplo de un formuario de búsqueda con consultas preparadas.</h6>
                <div class="padd2">
                    <form id="form-searchPrepared"
                          action="php-partials/partials-mysql-searchPrepared.php" method="get">
                        <label for="txt-searchP">Búscar:
                            <input id="txt-searchP" name="txt-searchP" type="text"
                                   placeholder="Búsqueda" class="">
                        </label>
                        <label for="btn-searchP">
                            <input id="btn-searchP" name="btn-searchP" type="submit" value="Búscar">
                        </label>
                    </form>
                    <p class="padd2"><b>Primer paso:</b> la sentencia sql ya no sería asi:
                        <br><i class="tab">$query_search = "select * from usuarios where nombre
                            like'%$search%'";</i>
                        <br>sino así:
                        <br><i class="tab">$query_search = "select * from usuarios where
                                            nombre = ?";</i>
                        <br>Se cambia la variable como parámetro y se coloca el signo de interrogación.
                    </p>
                    <p class="padd2"><b>Segundo paso:</b> El resultado ya no será un array como antes:
                        <br><i class="tab">$result_search =
                            mysqli_query($connection, $query_search);</i>
                        <br>sino que devolverá un objeto:
                        <br><i class="tab">$result_search =
                            mysqli_prepare($connection, $query_search);</i>
                        <br>Y $result_search será un parametro que se ultilizará en resto del ejercicio.
                    </p>
                    <p class="padd2"><b>Tercer paso:</b> Para saber si la sentencia funciona, arroja
                                    como resultado true o false, escribimos el siguiente código:
                        <br><i class="tab">$ok =
                            mysqli_stmt_bind_param($result_search, "s", $searchP);</i>
                        <br>Guardamos en la variable $ok. Primer parámetro el objeto que nos devolvió
                        prepare, segundo parámetro el tipo de dato que en este caso es string,
                        tercer parámetro la variable donde está almacenado lo que escribió el usuario.
                    </p>
                    <p class="padd2"><b>Cuarto paso:</b> Para saber si la sentencia ha arrojado
                        resultado, escribimos el siguiente código:
                        <br><i class="tab">$ok = mysqli_stmt_execute($result_search);</i>
                        <br>Sobreescribimos en la variable $ok.
                        El parámetro que pide es el objeto.
                    </p>
                    <p class="padd2"><b>Quinto paso:</b> Dentro de un if escribimos en la parte
                                    del else:
                        <br><i class="tab">$ok = mysqli_stmt_bind_result($result_search, $cedula,
                            $nombre, $apellido, $telefono, $direccion);</i>
                        <br>Donde Asociamos las variables al resultado, colocamos tantas
                        variables como resultados estemos llamando.
                    </p>
                    <p class="padd2"><b>Sexto paso:</b> Cambiamos el:
                        <br><i class="tab">$row_search = mysqli_fetch_array($result_search,
                                                        MYSQLI_ASSOC)</i>
                        <br>Dentro del while por:
                        <br><i class="tab">mysqli_stmt_fetch($result_search)</i>
                        <br>Imprimimos los resultados con un "echo" y por ultimo cerramos el objeto con:
                        <br><i class="tab">mysqli_stmt_close($result_search);</i>
                    </p>
                </div>
            </div>
            <div class="padd2 exam-php">
                <h6>Ejemplo de formulario de registro con sentencia preparada.</h6>
                <div class="padd2">
                    <form id="form-insertP" action="php-partials/partials-mysql-insertPrepared.php" method="get">
                        <label for="txt-cedulaP">Cédula:
                            <input id="txt-cedulaP" name="txt-cedulaP" type="number"
                                   placeholder="Cédula" class="">
                        </label>
                        <label for="txt-nameP">Nombre:
                            <input id="txt-nameP" name="txt-nameP" type="text"
                                   placeholder="Nombre" class="">
                        </label>
                        <label for="txt-lastnameP">Apellido:
                            <input id="txt-lastnameP" name="txt-lastnameP" type="text"
                                   placeholder="Apellido" class="">
                        </label>
                        <label for="txt-phoneP">Teléfono:
                            <input id="txt-phoneP" name="txt-phoneP" type="text"
                                   placeholder="Teléfono" class="">
                        </label>
                        <label for="txt-addressP">Dirección:
                            <input id="txt-addressP" name="txt-addressP" type="text"
                                   placeholder="Dirección" class="">
                        </label>
                        <label for="btn-addP">
                            <input id="btn-addP" name="btn-addP" type="submit" value="Agregar">
                        </label>
                    </form>
                </div>
            </div>
        </section>
        <hr class="php">
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('php' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>
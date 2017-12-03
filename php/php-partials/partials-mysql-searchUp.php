<?php
    require "../php-connection-mysql.php";

    /* Ejemplo de un botón búscar */

    //Guardo en la variable search el contenido de la caja de texto: txt-search.
    $searchUp = $_GET["txt-searchUp"];
    //Aquí estoy guardando en la variable connection los datos para conectarme a la DDBB.
    $connection = mysqli_connect($bd_host, $bd_user, $bd_password);
    //if para terminar la ejecución del programa si no conecta con la DDBB.
    if (mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos.";
        exit();
    }
    //Aquí le porporciona el nombre de la base de datos a conectar.
    //Y de no encontrarla, detiene el programa y muestra un mensaje de error.
    mysqli_select_db($connection, $bd_name) or die("No se encuentra la base de datos:" . $bd_name);
    //Aquí le indica que tipo de caracteres usa el sistema.
    mysqli_set_charset($connection, "utf8");
    //Con el % podemos buscar con solo colocar una parte del nombre.
    //Guardo en esta variable la consulta.
    $query_searchUp = "select * from usuarios where cedula = $searchUp";
    //Guardo el resultado de la consulta en un resulset.
    $result_searchUp = mysqli_query($connection, $query_searchUp);
    //$row = mysqli_fetch_row($result); <- con esto guardo en un array el resultado
    //de la primera fila. Con el while voy navegando en las filas una por una de forma ascendente
    //mientras hayan regitros en la base de datos, mientras sea true.
    while ($row_searchUp = mysqli_fetch_array($result_searchUp,  MYSQLI_ASSOC)){
        echo "<form action='partials-mysql-searchUp2.php' method='get'>";
        echo "<input type='number' id='t-cedula' name='t-cedula' disabled value='" . $row_searchUp['cedula'] . "'>";
        echo "<input type='text' id='t-name' name='t-name' value='" . $row_searchUp['nombre'] . "'>";
        echo "<input type='text' id='t-lastname' name='t-lastname' value='" . $row_searchUp['apellido'] . "'>";
        echo "<input type='text' id='t-phone' name='t-phone' value='" . $row_searchUp['telefono'] . "'>";
        echo "<input type='text' id='t-address' name='t-address' value='" . $row_searchUp['direccion'] . "'>";
        echo "<input type='submit' name='send' value='Actualizar'>";
        echo "</form>";
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/3/2017
 * Time: 5:54 PM
 */
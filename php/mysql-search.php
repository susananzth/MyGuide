<?php
    require "connection-mysql.php";
    require "php-mysql.php";
    /* Ejemplo de un botón búscar */
    $connection = mysqli_connect($bd_host, $bd_user, $bd_password);
    if (mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos.";
        exit();
    }
    mysqli_select_db($connection, $bd_name) or die("No se encuentra la base de datos:" . $bd_name);
    mysqli_set_charset($connection, "utf8");

    $search = $_GET["txt-search"];
    $query_search = "select * from usuarios where nombre ='$search'";
    $result_search = mysqli_query($connection, $query_search);
    while ($row_search = mysqli_fetch_array($result_search,  MYSQLI_ASSOC)){
        echo $row_search["nombre"] . " ";
        echo $row_search["apellido"] . " ";
        echo $row_search["cedula"] . " ";
        echo "<br>";
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 10/14/2017
 * Time: 8:49 PM
 */
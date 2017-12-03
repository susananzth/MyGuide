<?php
    require "../php-connection-mysql.php";
    /* Ejemplo de un botón insertar */

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
    //Guardo en esta variable la consulta.
    $query_search = "insert into usuarios (cedula, nombre, apellido, telefono, direccion) 
                      values (21852654, 'Pedro', 'Perez', '0426987325', 'Rancagua')";
    //Guardo el resultado de la consulta en un resulset.
    $result_search = mysqli_query($connection, $query_search);
    //Aquí se cierra la conexión.
    mysqli_close($connection);
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/2/2017
 * Time: 10:17 PM
 */
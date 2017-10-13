<?php
require "connection-mysql.php";
function exampleDDBBprocedimiento(){
    $bd_host="localhost";
    $bd_name="curso_php";
    $bd_user="root";
    $bd_password="";
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
    $query = "select * from usuarios";
    //Guardo el resultado de la consulta en un resulset.
    $result = mysqli_query($connection, $query);
    //$row = mysqli_fetch_row($result); <- con esto guardo en un array el resultado
    //de la primera fila. Con el while voy navegando en las filas una por una de forma ascendente
    //mientras hayan regitros en la base de datos, mientras sea true.
    while ($row = mysqli_fetch_row($result)){
        echo $row[0] . " ";
        echo $row[1] . " ";
        echo $row[2] . " ";
        echo $row[3] . " ";
        echo "<br>";
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
}

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 10/4/2017
 * Time: 12:02 AM
 */
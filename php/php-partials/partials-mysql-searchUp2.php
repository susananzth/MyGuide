<?php
    /* Ejemplo de un botón actualizar */
    require "../php-connection-mysql.php";
    //Almaceno en estas variables los datos optenidos en las cajas de texto desde el
    // formulario del archivo php-mysql.php
    $cedula = $_GET["t-cedula"];
    $name = $_GET["t-name"];
    $lastname = $_GET["t-lastname"];
    $phone = $_GET["t-phone"];
    $address = $_GET["t-address"];
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
    $query_update2 = "update usuarios set nombre = '$name', apellido = '$lastname', 
                                        telefono = '$phone', direccion = '$address' 
                                      where cedula = $cedula ";
    //Guardo el resultado de la consulta en un resulset.
    $result_update2 = mysqli_query($connection, $query_update2);
    //If para informar si el registro se hizo exitosamente
    if ($result_update2==false){
        echo "Error al actualizar los datos.";
    }else{
        //Con la función mysqli_affected_row me dice cuantos registros han sido
        //afectados con la consulta.
        if(mysqli_affected_rows($connection)==0){
            echo "No hay ningún registro en la base de datos con esa cédula.";
        }else{
            echo "Se ha actualizado " . mysqli_affected_rows($connection) .
                " registro con esa cédula.";
        }
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/3/2017
 * Time: 6:15 PM
 */
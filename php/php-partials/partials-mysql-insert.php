<?php
    /* Ejemplo de un botón insertar */
    require "../php-connection-mysql.php";
    //Almaceno en estas variables los datos optenidos en las cajas de texto desde el
    // formulario del archivo php-form-insert.php
    $cedula = $_GET["txt-cedula"];
    $name = $_GET["txt-name"];
    $lastname = $_GET["txt-lastname"];
    $phone = $_GET["txt-phone"];
    $address = $_GET["txt-address"];
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
    $query_insert = "insert into usuarios (cedula, nombre, apellido, telefono, direccion) 
                          values ($cedula, '$name', '$lastname', '$phone', '$address')";
    //Guardo el resultado de la consulta en un resulset.
    $result_insert = mysqli_query($connection, $query_insert);

    //If para informar si el registro se hizo exitosamente
    if ($result_insert==false){
        echo "Error al insertar los datos.";
    }else{
        echo "Registro guardado exitosamente!.";
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/3/2017
 * Time: 2:55 PM
 */
<?php
    require "../php-connection-mysql.php";

    /* Ejemplo de un botón insertar con sentencia preparada */

    //Almaceno en estas variables los datos optenidos en las cajas de texto desde el
    // formulario del archivo php-mysql-prepared.php
    $cedu = $_GET["txt-cedulaP"];
    $name = $_GET["txt-nameP"];
    $lastname = $_GET["txt-lastnameP"];
    $phone = $_GET["txt-phoneP"];
    $address = $_GET["txt-addressP"];
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
    //Guardo en esta variable la consulta, coloco el símbolo de '?' para luego pasarselo
    //como parámetro..
    $query_insert = "insert into usuarios (cedula, nombre, apellido, telefono, direccion)
                     values (?, ?, ?, ?, ?)";
    //Aquí se guarda el objeto clave mysqli_stmt que se utilizará como parámetro el
    //resto del código y toma como parámetros la conexión y la sentencia.
    $result_insert = mysqli_prepare($connection, $query_insert);
    //Luego con esta función sabremos si tiene exito la consulta.
    //Primer parámetro el objeto que nos devolvió prepare, segundo parámetro
    // el tipo de dato que en este caso es un entero y 4 string, tercer parámetro la variable
    // donde se almacenaram lo que escribió el usuario.
    $ok = mysqli_stmt_bind_param($result_insert, "issss",
                                $cedu, $name, $lastname, $phone, $address);
    $ok = mysqli_stmt_execute($result_insert);
    if ($ok == false){
        echo "Error al ejecutar la consulta";
    }else{

        echo "Personas encontradas <br><br>";

        //Aquí cerramos el objeto.
        mysqli_stmt_close($result_insert);
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/12/2017
 * Time: 8:11 PM
 */
<?php
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    //Conexión orientada a objeto en el mismo documento.
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    $cedula = $_GET["txt-searchOOP"];
    //Creamos una variable e instanciamos la clase mysqli y colocamos los argumentos.
    $connection = new mysqli("localhost", "root", "", "curso_php");
    //Condicional para saber si la conexión falla
    if($connection->connect_errno){
        //Lo concatenamos para que salga el mensaje de error
        echo "Fallo la conexión a la base de datos." . $connection->connect_errno;
    }
    //Aquí le colocamos para que reconozca los caracteres del idioma español utilizando la OOP
    $connection->set_charset("utf8");
    //Aquí guardamos la consulta en una variable
    $sql = "select * from usuarios where cedula = $cedula";
    //Aqui guardamos el resultado de la consulta
    $resultSelect = $connection->query($sql);
    //Si la consulta falla cerrará la conexión
    if ($connection->errno){
        die($connection->error);
    }
    while ($row = $resultSelectt->fetch_assoc()){
        echo $row["nombre"] . " ";
        echo $row["apellido"] . " ";
        echo $row["cedula"] . " ";
        echo "<br>";
    }
    //Cerrar la conexión
    $connection->close();

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/12/2017
 * Time: 8:40 PM
 */
<?php
    $cedula = $_POST["txt-cedula"];
    $name = $_POST["txt-name"];
    $lastname = $_POST["txt-lastname"];
    $phone = $_POST["txt-phone"];
    $address = $_POST["txt-address"];
    try{//Intenta conectar con la DB
        //Construimos un objeto utilizando PDO para colocar los datos de conexión
        $connection = new PDO("mysql:hots=localhost; dbname=curso_php", "root", "");
        //Nos aseguramos de que no haya error al conectar con la base de datos.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Asignamos el tipo de codificación.
        $connection->exec("SET CHARACTER SET utf8");
        //Guardamos la sentencia sql en una varible.
        $sql = "insert into usuarios (cedula, nombre, apellido, telefono, direccion) 
                values (:ced, :nom, :ape, :telf, :direc)";
        //Creamos una variable ($result) para guardar el PFO statement con la función prepare que pide
        // como parámetro el sql.
        $result = $connection->prepare($sql);
        //Aquí le pasamos los parámetro para la consulta sql.
        $result->execute(array(":ced"=>$cedula, ":nom"=>$name, ":ape"=>$lastname, ":telf"=>$phone,
                                ":direc"=>$address));
        echo "Registro insertado";
    }    catch (Exception $e){ //Si no logra conectarse entonces hará lo siguiente:
        //Mata el proceso y guarda el mensaje de error.
        die("Error" . $e->GetMessage());
    }   finally{
        //luego de que intente y ya sea que pueda o no, finalizara el proceso.
        $connection = null;
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/17/2017
 * Time: 10:08 AM
 */
<?php
    try{//Intenta conectar con la DB
        //Construimos un objeto utilizando PDO para colocar los datos de conexión
        $connection = new PDO("mysql:hots=localhost; dbname=curso_php", "root", "");
        echo "Conexión OK";
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
 * Date: 12/13/2017
 * Time: 9:09 PM
 */
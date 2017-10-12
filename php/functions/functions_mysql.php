<?php
include "../connection_mysql.php";
    //Aquí estoy guardando en la variable connection los datos para conectarme a la DDBB.
    $connection = mysqli_connect($bd_host, $bd_name, $bd_user, $bd_password);
    //Guardo en esta variable la consulta
    $query = "select * from usuarios";

    $result = mysqli_query($connection, $query);


/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 10/11/2017
 * Time: 7:45 PM
 */
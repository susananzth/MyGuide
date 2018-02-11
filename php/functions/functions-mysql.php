<?php
    require "php-connection-mysql.php";
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
        echo "<br><b>Ejemplo de una consulta guardada en un array con índice.</b><br>";
        while ($row = mysqli_fetch_row($result)){
            echo $row[0] . " ";
            echo $row[1] . " ";
            echo $row[2] . " ";
            echo $row[3] . " ";
            echo "<br>";
        }
        $result2 = mysqli_query($connection, $query);
        echo "<br><b>Ejemplo de una consulta guardada en un array asociativo.</b><br>";
        while ($row2 = mysqli_fetch_array($result2,  MYSQLI_ASSOC)){
            echo $row2["nombre"] . " ";
            echo $row2["apellido"] . " ";
            echo $row2["cedula"] . " ";
            echo "<br>";
        }
        //Aquí se cierra la conexión.
        mysqli_close($connection);
    }
?>
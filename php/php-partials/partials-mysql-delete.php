<?php
    require "../php-connection-mysql.php";

    /* Ejemplo de un botón Eliminar */

    //Guardo en la variable search el contenido de la caja de texto: txt-delete.
    $delete = $_GET["txt-delete"];
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
    $query_delete = "delete from usuarios where cedula=$delete";
    //Guardo el resultado de la consulta en un resulset.
    $result_delete = mysqli_query($connection, $query_delete);
    //If para informar si el registro se eliminó exitosamente
    if ($result_delete==false){
        echo "Error al eliminar los datos.";
    }else{
        //Con la función mysqli_affected_row me dice cuantos registros han sido
        //afectados con la consulta.
        if(mysqli_affected_rows($connection)==0){
            echo "No hay ningún registro en la base de datos con esa cédula.";
        }else{
            echo "Se han eliminado " . mysqli_affected_rows($connection) .
                " registros con esa cédula.";
        }
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
?>
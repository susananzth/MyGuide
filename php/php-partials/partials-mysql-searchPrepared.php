<?php
    require "../php-connection-mysql.php";

    /* Ejemplo de un botón búscar con sentencia preparada */

    //Guardo en la variable search el contenido de la caja de texto: txt-searchP.
    $searchP = $_GET["txt-searchP"];
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
    $query_search = "select * from usuarios where nombre = ?";
    //Aquí se guarda el objeto clave mysqli_stmt que se utilizará como parámetro el
    //resto del código y toma como parámetros la conexión y la sentencia.
    $result_search = mysqli_prepare($connection, $query_search);
    //Luego con esta función sabremos si tiene exito la consulta.
    //Primer parámetro el objeto que nos devolvió prepare, segundo parámetro
    // el tipo de dato que en este caso es string, tercer parámetro la variable donde está
    // almacenado lo que escribió el usuario.
    $ok = mysqli_stmt_bind_param($result_search, "s", $searchP);
    $ok = mysqli_stmt_execute($result_search);
    if ($ok == false){
        echo "Error al ejecutar la consulta";
    }else{
        //Asociamos las variables al resultado, colocamos tantas
        // variables como resultados estemos llamando.
        $ok = mysqli_stmt_bind_result($result_search, $cedula, $nombre,
                                        $apellido, $telefono, $direccion);
            echo "Personas encontradas <br><br>";
            //Por cada fila imprime el resultado.
            while (mysqli_stmt_fetch($result_search)){
                echo $cedula . " - " . $nombre . " - " . $apellido . " - " . $telefono . " - " .
                        $direccion . "<br>";}
        //Aquí cerramos el objeto.
        mysqli_stmt_close($result_search);
    }
    //Aquí se cierra la conexión.
    mysqli_close($connection);
?>
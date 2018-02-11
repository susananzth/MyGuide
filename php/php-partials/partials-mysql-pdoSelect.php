<?php
    $cedula = $_GET["txt-cedula"];
    $name = $_GET["txt-name"];
    try{//Intenta conectar con la DB
        //Construimos un objeto utilizando PDO para colocar los datos de conexión
        $connection = new PDO("mysql:hots=localhost; dbname=curso_php", "root", "");
        //Nos aseguramos de que no haya error al conectar con la base de datos.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Asignamos el tipo de codificación.
        $connection->exec("SET CHARACTER SET utf8");
        //Guardamos la sentencia sql en una varible.
        $sql = "select * from usuarios where cedula = :cedu and nombre = :nom";
        //Creamos una variable para guardar el PFO statement.
        $result = $connection->prepare($sql);
        //Aquí le pasamos el parámetro para el sql.
        $result->execute(array(":cedu"=>$cedula, ":nom"=>$name));
        //Aquí recorrerá cada registro de la tabla (statement).
        while ($register = $result->fetch(PDO::FETCH_ASSOC)){
            echo "Cédula: " . $register['cedula'] . " -  Nombre: " . $register['nombre'] .
                " -  Apellido: " . $register['apellido'] . " -  Teléfono: " . $register['telefono'] .
                " -  Dirección: " . $register['direccion'] . ".";
        }
        //Aqui cerramos el statement para que no se quede consumiend memoria.
        $result->closeCursor();
        echo "Conexión OK";
    }    catch (Exception $e){ //Si no logra conectarse entonces hará lo siguiente:
        //Mata el proceso y guarda el mensaje de error.
        die("Error" . $e->GetMessage());
    }   finally{
        //luego de que intente y ya sea que pueda o no, finalizara el proceso.
        $connection = null;
    }
?>
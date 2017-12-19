<?php

    //Un tray para que intente conectar a la DB.
    try{
        //Colocamos los datos de conexión utilizando OOP y PDO.
        $connection = new PDO("mysql:host=localhost; dbname=curso_php",
            "root", "");
        //Establecemos las propiedades de la conexión.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Guardamos la sentencia preparada con marcadores en esta variable:
        $sql = "select * from user_pass where username= :user and password = :pass";
        //Aqui preparamos la consulta y guardamos el array en $result.
        $result = $connection->prepare($sql);
        //Aquí creamos una variable para almacenar el user desde el formulario.
        //Esta función convierte cualquier símbolo html para evitar inyección sql.
        $user = htmlentities(addslashes($_POST["txt-user"]));
        //Aquí creamos una variable para almacenar la contraseña desde el formulario.
        $pass = htmlentities(addslashes($_POST["txt-pass"]));
        //Aquí comparamos el resultado de la consulta con lo que obtuvimos del formulario.
        $result->bindValue(":user", $user);
        $result->bindValue(":pass", $pass);
        //Ejecutamos la sentenci sql
        $result->execute();
        //Utilizamos una función paa evaluar si la comparación es verdadero o falso
        $register = $result->rowCount();
        if ($register!=0){
            echo "Adelante";
        }else{
            //Si no coninciden los datos, es decir, no esta registrado, lo redirigimos a la página de login
        }
    }//Si no conecta a la DB hará o siguiente
    catch (Exception $e) {//Guarda el mensaje de error en la variable $e
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/18/2017
 * Time: 8:26 PM
 */
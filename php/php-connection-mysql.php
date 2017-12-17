<?php
    //Conexión OOP
    require ("config.php");
    class Connection{
        protected $connection_db;
        public function Connection(){
            //Aquí colocamos los datos de conexión.
            $this->connection_db = new mysqli(DB_HOST, DB_USER,
                DB_PASSWORD, DB_NAME);
            //En caso que la conexión falle:
            if ($this->connection_db->connect_errno){
                //Aquí concatenamos el mensaje con el error que arroja mysql.
                echo "Falló al conectarse a la base de datos. Error: " . $this->connection_db->connect_errno;
                return;
            }
            //Aquí asignamos el tipo de codificación de la DB.
            $this->connection_db->set_charset(DB_CHARSET);
        }
    }
    //Conexión
    $bd_host="localhost";
    $bd_name="curso_php";
    $bd_user="root";
    $bd_password="";

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 10/11/2017
 * Time: 7:32 PM
 */
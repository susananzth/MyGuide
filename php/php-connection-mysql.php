<?php
    //Conexión OOP
    require ("config.php");
    class Connection{
        protected $connection_db;
        public function Connection(){
            //---------------#####################----------------------
            //Método PDO con OOP
            //---------------#####################----------------------
            try{
                //Colocamos los datos de la conexión.
                $this->connection_db = new PDO('mysql:host=localhost; dbname=curso_php',
                    'root', '');
                //Establecemos los atributos de la conexión
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Codificación de la DB.
                $this->connection_db->exec("SET CHARACTER SET utf8");
                return $this->connection_db;
            }catch (Exception $e){//Si la conezión falla, muestra el error.
                echo "La línea de error es: " . $e->getLine();
            }

            //---------------#####################----------------------
            //Método MySQLi
            //---------------#####################----------------------
            /*//Aquí colocamos los datos de conexión.
            $this->connection_db = new mysqli(DB_HOST, DB_USER,
                DB_PASSWORD, DB_NAME);
            //En caso que la conexión falle:
            if ($this->connection_db->connect_errno){
                //Aquí concatenamos el mensaje con el error que arroja mysql.
                echo "Falló al conectarse a la base de datos. Error: " . $this->connection_db->connect_errno;
                return;
            }
            //Aquí asignamos el tipo de codificación de la DB.
            $this->connection_db->set_charset(DB_CHARSET);*/
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
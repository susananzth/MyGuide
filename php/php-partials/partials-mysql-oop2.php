<?php
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    //OOP más eficiente para proyectos grandes.
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    require ("php-connection-mysql.php");
    class ReturnsUser extends Connection{
        public function ReturnsUser(){
            //llamamos al método o constructor de la clase padre
            parent::Connection();
        }
        public function get_user(){
            //Aquí guardamos la sentencia.
            $sqlQuery = $this->connection_db->query('select * from usuarios');
            //Almacenamos el resultado de la consulta en este array asociativo.
            $users = $sqlQuery->fetch_all(MYSQLI_ASSOC);
            //Aquí le decimos que nos devuelva ese array.
            return $users;
        }
    }

    //Instanciamos, es como darle play a la clase anterior
    $usuarios = new ReturnsUser();
    //Aquí le decimos que ejecute el método get_user
    $array_usuarios = $usuarios->get_user();
    //Recorremos el array

    foreach ($array_usuarios as $elements){
        echo $elements['cedula'] . " - " . $elements['nombre'] . " - " .
            $elements['apellido'] . " - " . $elements['telefono'] . " - " .
            $elements['direccion'] . ".<br>";
    }
?>
<?php
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    //OOP más eficiente para proyectos grandes.
    /*----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%------------*/
    require ("../php-connection-mysql.php");
    class ReturnsUser extends Connection{
        public function ReturnsUser(){
            //llamamos al método o constructor de la clase padre
            parent::Connection();
        }
        public function get_user($cedula){
            //Guardo la sentencia en esta variable
            $sql = "select * from usuarios where cedula = '" . $cedula . "'";
            //Aquí preparamos la consulta
            $sentencia = $this->connection_db->prepare($sql);
            //Ejecutamo lo que tenemos en sentencia para que sea un array
            $sentencia->execute(array());
            //Indicamos que el array es asociativo y lo metemos en la variable resultado.
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor(); //cerramos el array para que no consuma memoria.
            return $resultado;
            $this->connection_db=null; //Aquí cerramos conexión para liberar memoria.
        }
    }
    //Guardamos en la variable la cédula a buscar.
    $cedula = $_POST["txt-cedula2"];
    //Instanciamos, es como darle play a la clase anterior
    $usuarios = new ReturnsUser();
    //Aquí le decimos que ejecute el método get_user y el resultado lo almacenará en el array
    $array_usuarios = $usuarios->get_user($cedula);
    //Recorremos el array
    foreach ($array_usuarios as $elements){
        echo $elements['cedula'] . " - " . $elements['nombre'] . " - " .
            $elements['apellido'] . " - " . $elements['telefono'] . " - " .
            $elements['direccion'] . ".<br>";
    }
?>
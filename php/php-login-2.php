<?php
include "../partials/top_page.php";
include "../partials/header.php";
?>
<hr class="php">
<?php
include "../partials/nav-php.php";
?>
<hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">MySQL</h4>
        <div class="padd2 exam-php">
            <h6>Ejemplo de formulario de login sin cargar a otra página.</h6>
            <div class="padd2">
                <?php
                    if (!isset($_SESSION["usuario"])){
                        include "php-form-login.php";
                    }else{
                        echo "Hola: " . $_SESSION["usuario"] . ".";
                    }

                ?>
            </div>
        </div>
    </section>
    <hr class="php">
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
            //Con sesiones podemos redifirig a una pagina solo si el usuario esta registrado
            session_start();
            //Aquí estamos declarando la variable usuario como super global
            //y le asignamos el valor obtenido del cuadro de texto del formulario.
            $_SESSION["usuario"]=$_POST["txt-user"];

        }else{
            //Si no coninciden los datos, es decir, no esta registrado, lo redirigimos a la página de login
            echo "Los datos ingresados no son correctos o no están registrado.";
        }
    }//Si no conecta a la DB hará o siguiente
    catch (Exception $e) {//Guarda el mensaje de error en la variable $e
    }
include "../partials/footer.php";
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/28/2017
 * Time: 7:38 PM
 */
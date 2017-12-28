<?php
    //Aquí reanudamos la sessión, luego la destruimos y redirigimos al usuario a la página de login
    session_start();
    session_destroy();
    header("Location:../php-login.php");
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 12/28/2017
 * Time: 3:28 PM
 */
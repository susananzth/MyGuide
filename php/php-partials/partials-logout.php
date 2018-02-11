<?php
    //Aquí reanudamos la sessión, luego la destruimos y redirigimos al usuario a la página de login
    session_start();
    session_destroy();
    header("Location:../php-login.php");
?>
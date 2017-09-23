<?php
    /* ISSET es para asegurarse que se pulsó el botón enviar (send)*/
    if (isset($_POST["send"])){
        /* Declaro la variable $name y le asigno el valor del input de id "name".
        Lo mismo hago con "age" */
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($name == "Susana"){
            echo "Puedes entrar";
        } else {
            echo "No puedes entrar";
        }
    }

    function exampleFormulario(){
        echo "Puedes entrar";
    }
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:16 PM
 */
<?php

    /*-------------------------------------*/
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
    /*-------------------------------------*/
    if (isset($_POST["send-calc"])){
        $ope_one = $_POST["ope-one"];
        $ope_two = $_POST["ope-two"];
        $operation = $_POST["operation"];
        switch ($operation):
            case "Suma":
                echo 'El resultado es: ' . $result = $ope_one + $ope_two;
                /*Se puede guardar el resultado en una variable y luego mostrar el resultado
                  en el echo, pero esto consume un poquito de memoria para poder almacenar
                 la información */
                break;
            case "Resta":
                echo 'El resultado es: ' . ($ope_one - $ope_two);
                //De esta forma se ahorra memoria
                break;
            case "Multiplicación":
                echo 'El resultado es: ' . ($ope_one * $ope_two);
                break;
            case "División":
                if ($ope_two == 0){
                    echo 'No se admiten divisiones entre cero (0).';
                }else{
                    echo 'El resultado es: ' . ($ope_one / $ope_two);
                }
                break;
            case "Módulo":
                echo 'El resultado es: ' . ($ope_one % $ope_two);
                break;
            default:
                echo 'Seleccione un operados, por favor.';
        endswitch;
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:16 PM
 */
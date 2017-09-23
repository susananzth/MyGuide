<?php
    function dameDatos(){
        echo 'Esto es una función.';
    }

    function exampleSwitchSimple(){
        $miNum = 2; // Declaro la variable.
        switch ($miNum) { //Detecta que valor está en la variable
            case 1:
                echo "Es la condición n°1";
                break;
            case 2: //Esta es el caso que se cumplirá
                echo "Es la condición n°2";
                break;
            case 3:
                echo "Es la condición n°3";
                break;
            default: //Case que se ejecuta si los case anteriores son falsos.
                echo "Ninguna de las anteriores";
        }
    }

    function exampleSwitchMultiple(){
        $i = 5;
        switch ($i): /*Esta forma de abrir y cerrar un switch se usa cuando se
                                mezcla html con php. Se llama sintaxis alternativo. */
            case 0:
                echo '$i es 0.';
                break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo '"$i" está en algún lado entre  1 y 5.';
                break;
            case 6:
            case 7:
                echo '$i es 6 o 7.';
                break;
            default:
                echo '$i es igual o mayor que 8';
        endswitch;//Y aquí se cierra la sintaxis alternativo.
    }


/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/22/2017
 * Time: 10:05 PM
 */
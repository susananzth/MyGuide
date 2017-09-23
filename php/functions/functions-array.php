<?php

    function examplesArray(){
        $miArray = array("Huevo", "Tomate", "Chauchas");
        //Acceso mediante corchetes.
        echo $miArray[1] . ', ';
        /* -------------------------------- */
        $misLenguajes = array("HTML/CSS",
            "JavaScript", "PHP", "Python", "Ruby");
        //Acceso mediante llaves. Es indiferente.
        echo $misLenguajes{4} . ', ';
        /* -------------------------------- */
        //Modificando el array en la posición 4.
        $misLenguajes[4] = "Java";
        foreach($misLenguajes as $leng) {
            print "<em>$leng, </em>";}
        /* -------------------------------- */
        //Eliminando un elemento del array.
        unset($misLenguajes[3]);
        /* -------------------------------- */
        //Eliminando el array.
        unset($misLenguajes);
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:23 PM
 */
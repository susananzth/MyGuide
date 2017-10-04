<?php

    function examplesUsosArray(){
        $miArray = array("Huevo", "Tomate", "Chauchas");
        //Acceso mediante corchetes.
        echo $miArray[1] . ', ';
        /* -------------------------------- */
        $misLenguajes = array("HTML/CSS",
            "JavaScript", "PHP", "Python", "Ruby");
        //Acceso mediante llaves. Es indiferente.
        echo $misLenguajes{4} . ', ';
        /* -------------------------------- */
        //Agregando el array en la posición 4.
        $misLenguajes[] = "Perl";
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

    function examplesArray(){
        //Otra manera de hacer un array
        $semana[0]="Lunes";
        $semana[1]="Martes";
        $semana[2]="Miércoles";
        echo $semana[2];
        echo '<br>Los días de la semana son:<br>';
        $arrayCount= count($semana);
        //usamos un contador para el array para los casos en que no se sepa
        //cuanto es el índice máximo del array.
        for ($e=0;$e<$arrayCount;$e++){
            echo '-' . $semana[$e] . '.<br>';
        }

    }

    function examplesArrayAsociativo(){
        $datosUsuario= array("Nombre"=>"Susana",
                             "Apellido"=>"Piñero",
                             "Edad"=>25);
        echo $datosUsuario["Apellido"] . '<br>';
        echo 'Los datos del usuario son:<br>';
        foreach ($datosUsuario as $usuario=>$dato){
            echo $usuario . ': ' . $dato . '.<br>';
        }
        //Para agregar un eemento a un array asociativo.
        $datosUsuario["Pais"]="Venezuela";
        echo 'Los datos del usuario son:<br>';
        foreach ($datosUsuario as $usuario=>$dato){
            echo $usuario . ': ' . $dato . '.<br>';
        }
    }

    function examplesIs_array(){
        $semana=array("Lunes", "Martes", "Miercoles", "Jueves");
        //$semana="Semana 54";
        echo $semana[3];
        if (is_array($semana)){
            echo "<br>Es un array.";
        }else{
            echo "<br>No es un array";
        }
    }

    function examplesSort(){
        $misLenguajes = array("HTML/CSS",
            "JavaScript", "PHP", "Python", "Ruby");
        sort($misLenguajes);
        $arrayCount = count($misLenguajes);
        echo 'Los lenguajes son:<br>';
        for ($b=0;$b<$arrayCount;$b++){
            echo '-' . $misLenguajes[$b] . '.<br>';
        }
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:23 PM
 */
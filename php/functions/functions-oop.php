<?php

    class Coche { //La clase debe comenzar con una letra en mayúscula.
        //Atributos del objeto o características o propiedades.
        /*En este ejemplo se ve como los atributos son las características comunes que
        comparten todos los coches*/
        var $ruedas=4;
        var $color="";
        var $motor=1600;
        //Constructor.
        function Coche(){
            $this->ruedas=4;
        }
        //Comportamiento del objeto (¿Qué es capaz de hacer?)
        function arrancar(){
            echo 'Estoy arrancando <br>';
        }
        function acelerar(){
            echo 'Estoy acelerando <br>';
        }
        function girar(){
            echo 'Estoy girando <br>';
        }
        function frenar(){
            echo 'Estoy frenando <br>';
        }
        function establecerColor($colorCoche){
            //Le asignamos un valor al atributo color.
            $this->color=$colorCoche;
            echo 'El color de este coche es: ' . $this->color;
        }

    }
    //Instancias.
    /*En este ejemplo se ve que las instancias son los diferentes modelos de carros,
    que comparten los mismos atributos (tienen ruedas, motor y color), pero cada carro es
    de diferente color, diferente motor y diferente cantidad de ruedas.*/
    $mazda=new Coche();
    $renault=new Coche();
    $ford=new Coche();

    $mazda->girar();
    $renault->establecerColor("Verde");

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/24/2017
 * Time: 4:12 PM
 */
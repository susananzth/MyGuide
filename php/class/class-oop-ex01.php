<?php
    class Coche { //La clase debe comenzar con una letra en mayúscula.
        //Atributos del objeto o características o propiedades.
        /*En este ejemplo se ve como los atributos son las características comunes que
        comparten todos los coches*/
        var $ruedas=0;
        var $color="";
        var $motor=0;
        //Constructor.
        function Coche(){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }
        //Comportamiento del objeto (¿Qué es capaz de hacer?)
        function arrancar(){
            echo 'Estoy arrancando. <br>';
        }
        function acelerar(){
            echo 'Estoy acelerando. <br>';
        }
        function girar(){
            echo 'Estoy girando. <br>';
        }
        function frenar(){
            echo 'Estoy frenando. <br>';
        }
        function set_color($colorCoche, $nombreCoche){
            //Le asignamos un valor al atributo color.
            $this->color=$colorCoche;
            echo 'El color del coche <b>'. $nombreCoche . '</b> es: <b>' . $this->color . '.</b><br>';
        }

    }

    //-------------------------------------------------------------------------------

    class Camion extends Coche {//Hacemos esta clase hija de Coche para heredar su comportamiento.

        //Atributos. Los heredamos de la clase Coche

        //Constructor.
        function Camion(){
            $this->ruedas=8;
            $this->color="Gris";
            $this->motor=2600;
        }
        //Comportamiento.
        //Como esta clase es hija de la clase Coche, esta hereda el código y como va a
        // tener el mismo comportamiento pues no repetiremos el código.

        //Si queremos utilizar una función de la clase padre pero que se comporte de maera diferente
        //se puede hacer sobreescribiendo la función de esta manera:
        function set_color($colorCamion, $nombreCamion){
            //Le asignamos un valor al atributo color.
            $this->color=$colorCamion;
            echo 'El color del camión <b>'. $nombreCamion . '</b> es: <b>' . $this->color . '.</b><br>';
        }

        //Si queremos utilizar una función de la clase padre y además añadir mas código,
        //se puede hacer de esta manera sin necesidad de sobreescribir la función:
        function arrancar(){
            //Aqui le digo que cuando llame la funcion arrancar, primero haga lo que
            //está en la función arrancar() de la clase padre y luego continúe
            // con el codigo de esta función.
            parent::arrancar();
            echo 'Ya arranque. <br>';
        }

    }

    // INSTANCIAS //

    /*En este ejemplo se ve que las instancias son los diferentes modelos de carros,
    que comparten los mismos atributos (tienen ruedas, motor y color), pero cada carro es
    de diferente color, diferente motor y diferente cantidad de ruedas.*/

    $mazda=new Coche();//No es necesario colocar los paréntesis.
    $renault=new Coche();
    $ford=new Coche();
    $pegaso=new Camion();

    $mazda->girar();
    $renault->set_color("Verde", "Renault");
    $pegaso->set_color("Naranja", "Pegaso");
    echo 'El mazda tiene: <b>' . $mazda->ruedas . '</b> ruedas.<br>';
    echo 'El pegaso tiene: <b>' . $pegaso->ruedas . '</b> ruedas.<br>';
    $pegaso->arrancar();
?>
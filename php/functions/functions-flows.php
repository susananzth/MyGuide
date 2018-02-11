<?php
    function dameDatos(){
        echo 'Esto es una función.';
    }

    function exampleIfSimpple(){
        /*Ejemplo if*/
        $galletas = true;
        if($galletas == true) {
            echo 'Hay galletas :)';
        } else {
            echo 'No hay galletas ;(';
        }
    }

    function exampleIfWithHTML(){
        /*Ejemplo de if php con html*/
        $galletas = true;
        if($galletas == true) {
            ?>
            <br/><br/>
            <p>&nbsp &nbsp &nbsp &nbsp ---------------------------------</p>
            <?php
            echo '<br/>';
            echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hay galletas';
            echo '<br/>';
            echo '<br/>';
            echo '&nbsp;&nbsp &nbsp &nbsp ---------------------------------';
        } else {
            echo 'No hay galletas ;(';
        }
        echo '<br/>';
        echo '<br/>';
    }

    function exampleElseIf(){
        /*Ejemplo de else if*/
        $test = 33;
        if ($test > 40) {
            echo "Sí, $test es mayor que 40.";
        } else if ($test > 35) {
            echo "Sí, $test es mayor que 35.";
        } else if ($test > 30) {
            echo "Sí, $test es mayor que 30.";
        } else {
            echo "No, $test es menor que 40, 35 y 30.";
        }
        echo '<br/>';
        echo '<br/>';
    }

    function exampleIfTernario(){
        /*Ejemplos de condicional ternario*/
        $A=5; $B=3; $C=-7; $D=5;
        $msg = '';
        $A==5 ? $msg='A es 5<br/>': $msg='A no es 5<br/>';
        echo $msg;
        $A<$B ? $msg='A es menor que B<br/>': $msg='A es mayor o igual que B<br/>';
        echo $msg;
        $B<$C ? $msg='B es menor que C<br/>': $msg='B es mayor o igual que C<br/>';
        echo $msg;
        echo '<br/>';
        echo '<br/>';
        $haceFrio = 15;
        $respuesta ="";
        $temperatura = ($haceFrio<20) ? $respuesta = "Hace frio" : $respuesta = "No hace frio";
        echo $respuesta;
        echo '<br/>';
        echo '<br/>';
        $tipo="Rueda de camión";
        $grosor=0.33;
        $diametro=1.25 ;
        $marca="Kimashuki";
        if ($diametro>1.4){
            echo "La rueda es para un vehículo grande";
        }elseif ($diametro<=1.4){
            echo "La rueda es para un vehículo pequeño";
        }else {
            echo "No existe un tamaño de rueda válido";
        }
        echo '<br/>';
        echo '<br/>';
    }

    function exampleIfLogico(){
        /*Ejemplo de condicionales lógicos*/
        $a = 3;
        $b = 9;
        $result = ($a <= 3 and $b <> 9);
        if ( $result == true) {
            echo "Se cumple la condición";
        }else {
            echo "No se cumple la condición";
        }
        echo '<br/>';
        echo '<br/>';
    }

    function exampleIncrementoDecremento(){
        /*Ejemplo de operadores de incremento o decremento*/
        $a = 8;
        echo ++$a;
        echo "<br />";
        echo $a;
        echo '<br/>';
        echo '<br/>';

        $a = 8;
        echo $a++;
        echo "<br />";
        echo $a;
        echo '<br/>';
        echo '<br/>';
    }

    function exampleFor(){
        for ($i = 10; $i >=-10; $i--) {
            if ($i == 0) {
                echo 'La división entre cero (0) no existe.<br>';
                continue; //Esto hace que se salte la vuelta y no imprima el echo
                        //con el número cero y evitar el error.
                //break; <- Esta haria que el buble se interrumpieda completamente.
            }
            echo '9 / ' . $i . ' = ' . 9 / $i . '<br>';
        }
    }

    function exampleWhile(){
        $edad = 17;
        while ($edad < 20):
            echo 'La edad es: ' . $edad . '<br>';
            $edad = $edad + 1;
        endwhile;
    }

    function exampleWhileIf() {
        $conteoDeCaras = 0;
        $conteoDeLanzamientos = 0;
        while ($conteoDeCaras < 3) {
            $lanzamientos = rand(0,1);
            $conteoDeLanzamientos ++;
            if ($lanzamientos){
                $conteoDeCaras ++;
                echo "<div class=\"coin\">C</div>";
            }
            else {
                $conteoDeCaras = 0;
                echo "<div class=\"coin\">S</div>";
            }
        }
        echo "<p>Se hicieron {$conteoDeLanzamientos} lanzamientos.</p>";
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

    function exampleSwitchMultiple2(){
        $usuario = "Susana";
        $contraseña = 123456;
        switch (true):
            case $usuario == "Susana" && $contraseña == 123456:
                echo 'Acceso correcto. Hola Susana';
                break;
            case $usuario == "Ana" && $contraseña == 5555:
                echo 'Acceso correcto. Hola Pedro';
                break;
            case $usuario == "Pedro" && $contraseña == 987654:
                echo 'Acceso correcto. Hola Pedro';
                break;
            default:
                echo 'Acceso denegado, algunos datos estan incorrectos o no estas registrado';
        endswitch;
    }


    function exampleForeach(){
        $oracion = array("Estoy ", "aprendiendo ", "PHP!");

        foreach ($oracion as $palabra) {
            echo $palabra;
        }
    }
?>
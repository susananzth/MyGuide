<?php
    function exampleStrlen(){
        /*SRTLEN Para contar los caracteres de la cadena y los devuelva en numero entero*/
        $cad = "cadena";
        $n = strlen($cad);
        echo "La longitud de la cadena es: $n";
        echo "<br>";
        echo "<br>";
    }

    function exampleSubsrt(){
        /*SUBSRT para obtener una parte de la cadena*/
        $cad = "cadena";
        $sub1 = substr($cad, 2);
        $sub2 = substr($cad, 2, 2);
        echo "La subcadena número uno es la siguiente: $sub1 <br />";
        echo "La subcadena número dos es la siguiente: $sub2";
        echo "<br>";
        echo "<br>";
        $cad = "aprenderaprogramar.com";
        $sub1 = substr($cad, 0); //La cadena completa
        $sub2 = substr($cad, 0, 8); //La subcadena aprender
        $sub3 = substr($cad, 8, 1); //La subcadena a
        $sub4 = substr($cad, 9); //La subcadena programar
        echo "&nbsp &nbsp La subcadena número uno es la siguiente: $sub1 <br />";
        echo "&nbsp &nbsp La subcadena número dos es la siguiente: $sub2 <br />";
        echo "&nbsp &nbsp La subcadena número tres es la siguiente: $sub3 <br />";
        echo "&nbsp &nbsp La subcadena número cuatro es la siguiente: $sub4";
        echo "<br>";
        echo "<br>";
    }

    function exampleStrlenSubstr(){
        /*Concatenacion es con punto . */
        $cad1 = "aprendera";
        $cad2 = "programar";
        $cadt = $cad1 . $cad2;
        echo "La cadena número uno concatenada con la cadena número 2 es: $cadt <br />";
        // Ahora concatenaremos la cadena ejemplo con la concatenación de $cad2 y $cad1
        echo "Ejemplo: " . ($cad2 . $cad1);
        echo "<br>";
        echo "<br>";

        $cadena="Didáctica y divulgación de la programación";
        echo "<br>";
        echo "<br>";
        $sub1 = substr($cadena, 0, 9);
        $sub2 = substr($cadena, 10, 11);
        $sub3 = substr($cadena, 12, 11);
        $sub4 = substr($cadena, 24, 26);
        $sub5 = substr($cadena, 27, 29);
        $sub6 = substr($cadena, 30, 41);
        echo "Las palabras primera, tercera y sexta son: ". $sub1 . ", ". $sub3 .", ". $sub6;
        echo "<br>";
        echo "<br>";
        $num1 = strlen($sub1);
        $num2 = strlen($sub3);
        $num3 = strlen($sub6);
        echo "La palabra primera es Didáctica y tiene $num1 caracteres, la palabra tercera
         es divulgación y tiene $num2 caracteres. La palabra sexta es programación y tiene
          $num3 caracteres";
        echo "<br>";
        echo "<br>";
    }

    function exampleStrcmp(){
        $combine1 = "Susana";
        $combine2 = "SUSANA";
        echo 'El resultado de la comparación de "Susana" y "SUSANA" es: ' .
            $comparate = strcmp($combine1, $combine2);
    }

    function exampleStrcasecmp(){
        $combine3 = "Susana";
        $combine4 = "SUSANA";
        echo 'El resultado de la comparación de "Susana" y "SUSANA" es: ' .
            $comparate = strcasecmp($combine3, $combine4);
    }

    function exampleStrtoUpperLower(){
        echo 'Estoy usando toUpper en una cadena en minúscula: ' . strtoupper('susana.');
        echo "<br>";
        echo 'Estoy usando toLower en una cadena en mayúscula: ' . strtolower('SuSanA.');
    }

    function exampleStrpos(){
        $posicion = "Susana Nazareth Piñero Rodríguez";
        echo 'Dentro de la cadena <u>' . $posicion . '</u> se busca la letra ñ  y 
        se encuentra en la posición: ' . strpos($posicion, 'ñ');
    }

/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 1:22 PM
 */
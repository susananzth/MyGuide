<?php

    function exampleRound(){
        $redondear = round(M_PI); //M_PI es una palabra reservada de php para PI.
        print 'Redondea pi hacia abajo desde 3,1416...: <b>' . $redondear . '</b>';  // Muenrta: 3
        echo '<br>';
        $redondear_decimal = round(M_PI, 4);
        print 'Esta vez, redondea pi con 4 decimales: <b>' . $redondear_decimal . '</b>'; // Muestra: 3,1416
    }

    function exampleRand(){
        echo 'Un número aleatorio sin límites: <b>' . rand() . '</b>.<br>';
        echo 'Un número aleatorio entre el 50 y 500: <b>' . rand(50, 500) . '.</b>';
    }
?>
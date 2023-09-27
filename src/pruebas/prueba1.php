<?php

    $variable1=2;
    $variable2=5;

    if ($variable1<$variable2){
        echo "La variable 1 es menor que la 2";
    }elseif ($variable1>$variable2){
        echo "La variable 1 es mayor que la 2";
    }else{
        echo "Las variables son iguales";
    }

    switch ($variable1){
        case 10:
            echo "La variable tiene el valor de 10";
            break;
        default:
            echo "No es 10";
    }

    for ($i=0; $i<100; $i++){
        echo "El valor de la variable es $i";
    }

    while(true){
        echo "Miguel es el puto amo";
        break;
    }

    do{
        echo "Esto es un bucle do-while";
    }while($variable1>100);
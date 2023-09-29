<?php

    $variable1 = [];

    print_r($variable1);

    $variable1['pagoAgosto'] = 45;

    print_r($variable1);

    echo "<br>";

    $variable1['pagoJulio'] = 4;

    print_r($variable1);

    echo "<br>";

    /*for ($i=0; $i<13; $i++){
        echo $variable1[$i]."<br>";
    }*/

    foreach ($variable1 as $item) {
        echo $item."<br>";
    }

    echo "<br>";

    foreach ($variable1 as $clave=>$valor) {
        echo "La posición $clave tiene el valor $valor<br>";
    }

    $contactos['Sandra']=array(
        'apellidos'=>'Deltell Torregrosa',
        'edad'=>40,
        'salario'=>2000.56,
        'asignaturas'=>array('LEMA', 'Base de Datos', 'Redes')
    );


    $contactos['Inma']=array(
        'apellidos'=>'Climent',
        'edad'=>37,
        'direccion'=>'Los Pinos 25',
        'asignaturas'=>['FOL', 'EIE']
);

    var_dump($contactos);

    echo "<br><br><br><br>";

foreach ($contactos as $clave=>$valor) {
    echo "<br>La posición $clave: ";
    if (is_array($valor)){
        foreach ($valor as $claveInterna=>$valorInterno) {
            if (is_array($valorInterno)){
                echo "La clave es: $claveInterna";
                foreach ($valorInterno as $asignatura) {
                    echo " $asignatura ";
                }
            }else {
                echo "$claveInterna -------------- $valorInterno<br>";
            }

            }
    }else{
        echo "<br>$valor";
    }
    }
<?php
    $edad1 = $_GET["her1"];
    $edad2 = $_GET["her2"];
    $hermano1 = "hermano1";
    $hermano2 = "hermano2";

    if ($edad1>$edad2) {
        echo "el hermano mayor es: ".$hermano1." con ".$edad1." años de edad";
        
    }if($edad1==$edad2){
        echo "las edades de los hermanos son iguales";
    }else {
        echo "el hermano mayor es: ".$hermano2." con ".$edad2." años de edad";
    }
?>
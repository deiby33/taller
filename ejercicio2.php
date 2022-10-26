<?php
    $n = $_GET["nom"];
    $a = $_GET["asig"];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    
    $promedio = ($n1 + $n2 + $n3)/3;

    echo "Estudiante:"." ".$n." "."Asignatura:"." ".$a." "."promedio:"."$promedio"
?>
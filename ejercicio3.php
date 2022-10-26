<?php
    $equipo = $_GET["equi"];
    $gan = 3;
    $emp = 1;
    $ga = $_GET["ga"];
    $per = $_GET["per"];
    $em = $_GET["em"];
    $puntostotales = ($ga * $gan) + ($em * $emp);

    echo "Equipo:"." ".$equipo." "."total de puntos:"." ".$puntostotales
?>
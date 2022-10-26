<?php
    $nom = $_GET["nom"];
    $asig = $_GET["ag"];
    $finalc = $_GET["ca"];

    if ($finalc < 7) {
        echo "Nombre: ".$nom." Asignatura: ".$asig." calificacion: ".$finalc."el pelao esta REPROBADO";
    }else{
        echo "Nombre: ".$nom." Asignatura: ".$asig." calificacion: ".$finalc."el pelao esta APROBADO";
    }
?>
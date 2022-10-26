<?php
    $nom = $_GET["n"];
    $asig = $_GET["a"];
    $C1 = $_GET["c1"] * 30;
    $C2 = $_GET["c2"] * 30;
    $C3 = $_GET["c3"] * 40;

    $ntd = $C1 + $C2 + $C3;
    $nf = $ntd / 100;

    if ($nf>=4) {
        echo "Aprendiz: ".$nom." Asignatura: ".$asig." Calificacion final: ".$nf." Aprobo";
    }else{
        echo "Aprendiz: ".$nom." Asignatura: ".$asig." Calificacion final: ".$nf." Reprobo";
    }
    
?>
<?php
    $volante = 5000;
    $poster = 2000;
    $tarjetas = 500;

    $vv = $_GET["v"] * $volante;
    $vp = $_GET["p"] * $poster;
    $vt = $_GET["t"] * $tarjetas;

    $vtotal = $vv + $vp + $vt;

    echo "Precio por cantidad de volantes: ".$vv." precio por cantidad de poster: ".$vp." precio por cantidad de trajetas de presentacion: ".$vt." total a pagar: ".$vtotal;

    
?>
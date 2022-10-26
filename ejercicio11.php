<?php
    $precio = $_GET["p"];
    $ganancia = $precio + ($precio * 0.15);
    

    echo "usted debe vender su producto a ".$ganancia." para obtener alguna ganacia";

?>
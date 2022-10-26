<?php
    $valorapagarcliente = $_GET["vac"];

    $desc = $valorapagarcliente - ($valorapagarcliente * .2);

    if ($valorapagarcliente>20000) {
        echo "Usted obtiene un descuento en su valor a pagar y pagara tan solo: ".$desc;
    }else {
        echo  "pagar: ".$valorapagarcliente."  recuerde que si desea tener rebaja en alguno de nuestros precios, debe comprar desde un valor mayor a 20000";
    }
   
?>
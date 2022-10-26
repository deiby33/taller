<?php
    $edad = $_GET["ed"];
    $sexo = $_GET["sx"];

    if (($edad>63)&&($sexo=="m")) {
        echo "usted ya se puede jubilar caballero";
    }else{
        if (($edad>54)&&($sexo=="f")){
            echo "usted ya se puede jubilar señorita";
        }else{
            echo "Usted todavia no se puede jubilar";
        }
    }
?>
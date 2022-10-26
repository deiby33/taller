<?php
    $capital = $_GET["C"];
    $in1 = $capital + ($capital * 0.02);
    $in2 = $capital + ($capital * 0.047);
    $in3 = $capital + ($capital * 0.07);

    if ($capital<500) {
       echo "Capital ingresado: ".$capital." Total del capital: ".$in1." los intereses seran del:  2%";
    }else{
        if (($capital>=500)&&($capital<1500)) {
            echo "Capital ingresado: ".$capital." Total del capital: ".$in2." los intereses seran del:  4.5%";
        }else{
            echo "Capital ingresado: ".$capital." Total del capital: ".$in3." los intereses seran del:  7%";
        }
    }

?>
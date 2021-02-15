<?php

    $no1=5;
    $no2=8;
    $no3=7;

    echo"Given Numbers: $no1,$no2,$no3 \n";

    if($no1>$no2)
    {
        if($no1>$no3)
        {
            echo"Largest Number: $no1";
        }
        else
        {
            echo"Largest Number: $no3";
        }
    }
    else
    {
        if($no2>$no3)
        {
            echo"Largest Number: $no2";
        }
        else
        {
            echo"Largest Number: $no3";
        }
    }

?>
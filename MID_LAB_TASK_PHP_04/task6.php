<?php

    $arr= [5,'asd','!@#$'];
    $desiredElement=5;

    foreach($arr as $val)
    {
        if($val==$desiredElement)
        {
            echo"$desiredElement is present in the array.\n";
        }
    }

?>
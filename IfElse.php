<?php
    // if (condition){
    //     // action
    // }
    $age = 67;
    if ($age <= 12){
        echo "you should not be here";
    }
    elseif($age >12 & $age <60){
        echo "you are welcome here";
    }
    else{
        echo "you are old here";
    }
?>
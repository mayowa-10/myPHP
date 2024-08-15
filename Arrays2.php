<?php
    //ASSOCIATIVE ARRAYS
    $users = ['basit'=> 23 , 'abdul' => 33 , 'mayowa' => 40];
   // echo $users['basit'];

    foreach ($users as $key => $value){
        echo "name is: " , $key , "  my age is ", $value , "<br>"; 
    }
                
?>
<?php

function saysum($date){


    $sum = array_sum($date);

    $count = count($date);



    return $sum / $count;








}



function small($date){


$a = array_unique($date);


sort($a);



for ($i=0; $i < 5 ; $i++) { 
   echo $a[$i] ."<br>";
}





}


function big($date){


    $a = array_unique($date);
    
    
    rsort($a);
    
    
    
    for ($i=0; $i < 5 ; $i++) { 
       echo $a[$i] ."<br>";
    }
    
    
    
    
    
    
    }
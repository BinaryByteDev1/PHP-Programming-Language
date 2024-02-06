<?php

// Sprear operator    [ ... ] token

function sum(... $n){
    $sum = 0;
    foreach($n as $values){
        $sum = $sum + $values;
    }
    return $sum;
}

echo "Sum = " , sum(1,2,3,4,6,5);


// combine the multiple parameters using spread operator
echo"<br> <br>";

/*
function combine (... $data){
    $final_data ="";
    foreach($data as $values){
        $final_data = $values;
    }
    return $final_data;
    
}
echo combine("Hilal", "Waseem","Aadil","Abass");
*/

















?>

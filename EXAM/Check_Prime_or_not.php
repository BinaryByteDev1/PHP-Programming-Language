<?php

function Check_Prime($n){
    $check = false;
    if($n == 1 || $n == 2){
        echo $n , " is prime Number";
    }
    for($i= 2; $i < $n; $i++){
        if($n % $i != 0){
             $check = true;
            break;
        }
        else{
            echo $n," is not prime number";
            break;
        }
    }
    
    if($check == true){
        echo $n ," is prime number";
    }
}


$n = 10;
echo Check_Prime($n);


?>
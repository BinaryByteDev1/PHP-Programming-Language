<?php

function Factorial($n ){
    $fact = 1;
    
    for($i = 1; $i <= $n; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}

$n = 5;
echo $n ," Factorial = ", Factorial($n);

// Or Method second  2
// Or Method second  2

/*function Factorial($n ){
    $fact = 1;
    
    for($i = $n; $i >= 1; $i--){
        $fact = $fact * $i;
    }
    return $fact;
}

$n = 5;
echo $n ," Factorial = ", Factorial($n);
*/

echo"<br>";



// Or Method third 3 Using RECURSION
// Or Method third 3 Using RECURSION

function Factorial_Recursive($n){
    
    if($n == 1){
        return 1;
    }
    return $n * Factorial_Recursive($n -1);
}

$x = 5;
echo $x , " Factorial = ", Factorial_Recursive($x);








?>





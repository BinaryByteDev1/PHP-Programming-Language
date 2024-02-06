<?php

// Functions in Php

function Greeting() {
    echo "Hello Php Programming language...";
    
}
Greeting();

echo "<br> <br>";

// Function parameters and aurguments
function Add($a , $b){
    return $a + $b;
}
$a = 10;
$b = 20;

echo "Sum = " ,Add($a , $b);

echo"<br>  <br>";
// more parameters and aurguments

function Check_Greater_Number($a , $b ,$c){
        
    if ($a > $b && $a > $c){
        return $a;
    }else if($b > $a && $b > $c) {
        return $b;
    }else{
        return $c;
    }
}
$x = 100;
$y = 200;
$z = 30;
echo Check_Greater_Number($x , $y ,$z);


echo "<br> <br>";
// Find the Factorial of N using Function

function factorial($n){
    $fact = 1;
    for($i = 1; $i <= $n; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}

echo "Fcatorial of n = " , factorial(5);












?>
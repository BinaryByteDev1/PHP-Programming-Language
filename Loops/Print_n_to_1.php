<?php

// using for loop
$n = 1;
for($i = 200; $i >= $n; $i--){
    
    echo $i , "    ";
}


echo"<br> <br>";


// using while loop
$i = 200;
$m = 1;
while ($i >= $m){
   echo $i,"    ";
   $i--;
}

echo"<br> <br>";
// using do while loop
$x = 200;
do{
    echo $x,"    ";
    $x--;
}while($x >= 1);

?>
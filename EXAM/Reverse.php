<?php
$string  = "Hilal";
$reverse = ' ';

$i = 0;
while(!empty($string[$i])){
    $reverse  = $string[$i].$reverse;
    $i++;
}
echo $reverse;

echo "<br><br>";
// Method second

$string2 = "Waseem";
$reverse_str = ' ';
$len = strlen($string2);
$i = $len - 1;
while($i >= 0){
    $reverse_str .= $string2[$i];
    $i--;    
}
echo $reverse_str;













?>
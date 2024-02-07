<?php
function check_greatest_number($a , $b , $c ){

  if($a > $b && $a > $c){
      echo $a , " is Greatest Number";
    
  }
    else if($b > $a && $b > $c){
    echo $b , " is Greatest Number ";

   }
    else{
    echo $c , " is Greatest Number";
  }
}

$a = 100;
$b = 200;
$c = 60;

check_greatest_number($a , $b , $c);



?>


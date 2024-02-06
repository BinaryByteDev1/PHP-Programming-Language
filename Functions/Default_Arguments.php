<?php

// Default Parameters in Functions

function default_para($message = "Wel come to Coding..."){
    return $message;
}

echo default_para();

echo"<br> <br>";
//Multiple  default parameters in function

function default_para2($message ="Hii" ,$name="Hilal"){
    return $message ." ".$name;
}
echo default_para2();
echo"<br>";
echo default_para2("Java ", "Python");









?>
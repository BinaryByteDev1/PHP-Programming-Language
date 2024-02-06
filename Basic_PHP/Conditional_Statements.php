<?php

//Conditional Statement
//1 :- If()
//2 :- If Else()
//3 :- If Else If()
//4 :- Switch()

echo "If()   Statement";
echo "<br>";

$n1 = 100;
$n2 = 60;
if($n1 >= $n2 ){
    echo "n1 is greater than n2";
}
echo "<br>";

                            // OR
// using ternery operator (?:)
echo $n1 >= $n2 ? "n1 is greater than n2 " : "n2 is greater than n1";

echo "<br> <br>";
echo "If() else   Statement";
echo "<br>";


if($n1 == $n2 ){
    echo "number 1 and number 2 is Equal";
}else{
    echo "number 1 and number2 is not equal";
}

echo "<br>";
                            // OR
//using Ternary OPerator
echo $n1 == $n2 ? "number 1 ans number 2 is equal " : "number 1 and number 2 is not equal";


echo "<br> <br>";
echo "if() else if() Statement or Nested if else";
echo"<br> <br>";

$a = 100;
$b = 200;
$c = 60;

if($a > $b && $a > $c){
    echo "a is greatest";
    
}else if($b > $a && $b > $c){
    echo "b is greatest";

}else{
    echo "c is greatest ";
}

// Q :- write a program to accept three inputs a, b, c print the greatest one ????

echo "<br> <br>";

// more Examples of conditional statements
// Q :- write  a program to entered password to check write or not ???


echo"<br> <br>";


// Switch case 

echo "Switch Case Statement...";
echo "<br> <br>";
$day = 7;
switch($day){
    case 1 :
    echo "Monday";
    break;
    
    case 2 :
    echo "Tuesday";
    break;
    
    case 3 :
    echo "Wednsday";
    break;
    
    case 4 :
    echo "Thursday";
    break;
    
    case 5 :
    echo "Friday";
    break;
    
    case 6 :
    echo "Satarday";
    break;
    
    case 7 ;
    echo "Sunday";
    break;
    
    default : 
    echo "Invalid day entered !!!";
}



// Next Example

// Q :- write a program to perform Add , Sub , Mul , Div , Modules operation using Switch statement ???













?>
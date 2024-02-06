<?php
// Operators in PHP

// Arithmatic Operators
//[  + , - ,  * ,  / ,  % , ++  ,   --  ]

echo "Arithmatic Operators";
echo "<br>";
$a = 10;
$b = 20;

echo $a + $b;
echo "<br>";
echo $b - $a;
 echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
//Pre Increment
$x  = 100;
$x++;
echo $x;
echo "<br>";
// Pre Decrement
$y =100;
$y--;
echo $y;

echo "<br>";

// Post Increment
$x1 = 100;
++$x1;
echo $x1;

echo "<br>";
// Post Decrement
$y1 = 100;
--$y1;
echo $y1;

echo "<br>";
                // Assignmant Operator
//[ +=  ,  -= , *= , /= , %=]
echo "Assignmant Operators";
echo "<br>",

$a1 = 10;
$a1 += 20;
echo $a1;

echo "<br>";
$b1 = 100;
$b1 -= 50;
echo $b1;

echo "<br>";
$c1 = 10;
$c1 *= 7;
echo $c1;


echo "<br>";
$d1 = 10;
$d1 %= 2;
echo $d1;

echo "<br>";



                // Comprassion Operators
//[ == , != , > , < , >= , <=  ]


echo "Comprassion Operator";
echo "<br>";

$val1 = 100;
$val2 = 60;

echo $val1 == $val2 ? "True"  : "False";
echo "<br>";
echo $val1 != $val2 ? "True" : "False";
echo "<br>";
echo $val1 > $val2 ? "True" : "False";
echo "<br>";
echo $val1 < $val2 ? "True" : "False";


echo "<br>";
echo $val1 <= $val2 ? "True" : "False";

echo "<br>";
echo $val1 >= $val2 ? "True" : "False";

echo "<br>";

                // Logical Operators
//[ &&   ,   ||    ,   !   ]
echo "Logical Operator";
echo "<br>";

$num1 = 100;
$num2 = 200;
// Logical AND
if($num1 > $num2 && $num2 < $num1 ){
    echo "num1 is greatethan num2";
}else{
    echo "num2 is greaterthan num1";
}

// Logical OR
echo "<br>";
if($num1 < $num2 || $num1 > $num2 ){
    echo "True";
}
echo "<br>";
// Logical NOT





echo "<br>";

                // Conditional or Ternery Operators
//[    ?:    ]
echo "Conditional or Ternery Operator";
// Conditional or ternery operator is alternative of (If-else)

// Examples

echo"<br> <br>";

$n1 = 100;
$n2 = 100;
if($n1 == $n2){
    echo "True";
}else{
    echo "False";
}

//                        OR 
echo "<br>";
echo $n1 == $n2 ? "True" : "False";



?>


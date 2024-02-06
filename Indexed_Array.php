<?php

//Indexed Array

$data = array(10,20,30,40,50,60 ,70,80,90,100);

echo $data[0];
echo $data[1];
echo $data[2];
echo $data[3];
echo $data[4];
echo $data[5];
echo $data[6];
echo $data[7];
echo $data[8];
echo $data[9];

echo "<br> <br>";

// Access using Iteratio 

for($i = 0; $i < count($data); $i++){
    echo $data[$i], "--";
}

echo "<br> <br>";

$fruits = array("mango" , "Banana" , "apple" , "orange" , "Pineapple");

/*echo $fruits[0];
echo $fruits[1];
echo $fruits[2];
echo $fruits[3];*/

var_dump($fruits);

echo"<br>";
// update of indexed array
$fruits[0] = "Coconut";

echo $fruits[0];
echo"<br>";
var_dump($fruits);


// Length of a array
echo"<br> <br>";
echo count($fruits);








?>
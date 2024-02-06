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


echo"<br> <br>";

// Updation in indexed array
$array = array(10,20,30,40,50,60,70,80,90100);

echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];
echo $array[4];
echo $array[5];


//Update values in array

$array[0] = 100;
$array[1] = 200;
$array[2] = 300;
$array[3] = 400;
$array[4] = 500;
$array[5] = 600;

echo"<br> <br>";

echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];
echo $array[4];
echo $array[5];

echo"<br> <br>";

// Sum of all elements in array

$array2 = array(10,20,30,40,50,60,70,80,90,100);

$sum = 0;

for($i = 0; $i < count($array2); $i++){
    $sum = $sum + $array2[$i];
}

echo "Sum of array = ", $sum;


echo"<br> <br>";

// sum using for each loop
$sum2 = 0;

foreach($array2 as $values){
    $sum2 += $values;
}
echo "Sum of array = ",$sum2;








?>
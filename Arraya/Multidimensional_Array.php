<?php
$books = array (
  array("Javascript","Hilal Ahmad",2019),
  array("Python","Waseem Ahmad",2023),
  array("Kotlin","Aasif Ahmad",2020),
  array("Typescript","Umer Ahmad",2015)
);


echo "Book Name :  ".$books[0][0]."Author : ".$books[0][1]."  Year : ".$books[0][2],"<br>";

echo "Book Name :  ".$books[1][0]."Author : ".$books[1][1]."  Year : ".$books[1][2], "<br>";

echo "Book Name :  ".$books[2][0]."Author : ".$books[2][1]."  Year : ".$books[2][2],"<br>";

echo "Book Name :  ".$books[3][0]."Author : ".$books[3][1]."  Year : ".$books[3][2];

echo"<br> <br>";



// Using Iteration / Loop
// Using Iteration / Loop

for($i = 0; $i < count($books); $i++){
    for($j = 0; $j < count($books); $j++){
        echo $books[$i][$j],"---";
    }
    echo"<br>";
}

echo "<br> <br>";
// print the rows and columns as grid /matrix form 

$arr = array(
array(10 , 20 , 30, 40 , 50),
array(60 , 70 , 80 , 90 ,10),
array(30 , 48 , 93 , 72 , 67),
array(12 , 44 , 55 , 66 , 88),
array(11 , 12 , 44 , 66 , 79)

);

for($i = 0; $i < count($arr); $i++){
    for($j = 0; $j < count($arr); $j++){
        echo $arr[$i][$j] , "   ";
    }
    echo "<br>";
}


echo "<br> <br>";


$arr2 = array(
array("Hilal" , "Waseem" , "Aadil ", "Abass" , "Ather"),
array("Hilal" , "Waseem" , "Aadil ", "Abass" , "Ather"),
array("Hilal" , "Waseem" , "Aadil ", "Abass" , "Ather"),
array("Hilal" , "Waseem" , "Aadil ", "Abass" , "Ather"),
array("Hilal" , "Waseem" , "Aadil ", "Abass" , "Ather")

);

// Updatation in Multidimensional array

$arr2[0][4] = "Hilal";
$arr2[1][4] = "Hilal";
$arr2[2][4] = "Hilal";
$arr2[3][4] = "Hilal";
$arr2[4][4] = "Hilal";




for($i= 0; $i < count($arr2); $i++){
    for($j = 0; $j < count($arr2); $j++){
        echo $arr2[$i][$j] , "    ";
    }
    echo "<br>";
}




















?>
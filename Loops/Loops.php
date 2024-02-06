<?php
echo "Loops in php or control statements in php.....";
echo "<br> <br>";
// for loop
// while loop 
// do while loop
// forEach loop

echo "for loop in php.....";
echo "<br> <br>";

for($i = 1;  $i <= 100; $i++){
        echo $i, "   ";
}
echo"<br>";



echo "while loop in php.....";
echo "<br><br>";

$x = 1; 
while($x != 100){
    echo $x , "   ";
    $x++;
}
echo "<br>";


echo "do while loop in php.....";
echo "<br><br>";

$z = 10;
do{
    echo $z , "   ";
    $z++;
}while($z < 10);
echo " <br>";

echo "forEach loop in php.....";
echo "<br><br>";

$data = array(10 , 20 , 30 , 40 , 50 , 60 , 70 , 80  , 90 , 100);
foreach($data as $value){
    echo $value ,"     ";
}

echo"<br> <br>";
$array = array("Mango " , "Orange" , "Papaya" , "Watermilon" , "Pear" , "Banana");
foreach($array as $value){
    echo $value ,"    ";
}



?>
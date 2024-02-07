<?php
// Sorting Array

$data = array(9 , 1 , 4 , 5 , 2 , 6 , 3 , 7 , 10 , 8 );

for($i = 0; $i < count($data); $i++){
    echo $data[$i] , "  ";
}
echo "<br><br>";

// Sort Array method 1 

$n = count($data);

for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n-$i-1; $j++){
        if($data[$j] > $data[$j+1]){
            $temp = $data[$j];
            $data[$j] = $data[$j+1];
            $data[$j+1] = $temp;
        }
    }
}
for($i = 0; $i < count($data); $i++){
    echo $data[$i] , "  ";
}


echo "<br> <br>";
//Sort array method second

for($i = 0; $i < $n; $i++){
    $min = $i;
    for($j = $i+1; $j < $n; $j++){
        if($data[$j] < $data[$min]){
            $min = $j;
        }
    }
    $temp = $data[$j];
    $data[$j] = $data[$min];
    $data[$min] = $temp;
}

for($i = 0; $i < count($data); $i++){
    echo $data[$i] , "  ";
}


echo"<br>";
// Sort an Array by In-built method

sort($data);

for($i = 0; $i < count($data); $i++){
    echo $data[$i] , "  ";
}






?>
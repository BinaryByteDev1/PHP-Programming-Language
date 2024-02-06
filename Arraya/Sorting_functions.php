<?php
// sort() - sort arrays in ascending order
$data = array(9,7,8,4,3,7,1,2,5,8,11,12);
for($i = 0; $i < count($data); $i++){
    echo $data[$i], "   ";
}
echo"<br>";
sort($data);
for($i = 0; $i < count($data); $i++){
    echo $data[$i], "    ";
}


echo"<br>";
echo"<br>";

//rsort() - sort arrays in descending order

$data2 = array(9,7,8,4,3,7,1,2,5,8,11,12);
for($i = 0; $i < count($data2); $i++){
    echo $data2[$i], "   ";
}
echo"<br>";
rsort($data2);
for($i = 0; $i < count($data2); $i++){
    echo $data2[$i], "    ";
}


echo"<br>";
echo"<br>";


//asort() - sort associative arrays in ascending order, according to the value of associative array


$data3 = array("hilal"=>"35", "waseem"=>"37", "junaid"=>"33", "azhar" => "20");
foreach($data3 as $value){
    echo $value, "   ";
}
echo"<br>";
asort($data3);
foreach($data3 as $value){
    echo $value, "   ";
}



echo"<br>";
echo"<br>";

//ksort() - sort associative arrays in ascending order, according to the key of Associative array


$data4 = array("hilal"=>"35", "waseem"=>"37", "junaid"=>"33", "azhar" => "20");
foreach($data4 as $value){
    echo $value, "   ";
}
echo"<br>";
ksort($data4);
foreach($data4 as $value){
    echo $value, "   ";
}

?>
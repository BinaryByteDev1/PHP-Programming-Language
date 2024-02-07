<?php

// both time ans date and its diff formats

//mktime(hour, minute, second, month, day, year)

$date_time = mktime(10 , 11 , 2024,  4 , 55 , 37);
echo date("d / m / y  --- h : m : s", $date_time), "<br>";
//echo date("h : m : s --- d / m / y", date_time);

echo"<br><br>";


// strtotime function
// strtotime function

$d1 = strtotime("tomorrow");
echo date("d / m / y  --- h : m : s", $d1), "<br>";

$d2 = strtotime("next sunday");
echo date("d / m / y  --- h : m : s", $d2), "<br>";

$d3 = strtotime("+2 Months");
echo date("d / m / y  --- h : m : s", $d3), "<br>";







?>
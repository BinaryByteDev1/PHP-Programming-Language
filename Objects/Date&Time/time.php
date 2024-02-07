<?php

// different time formats in php 
echo "Time is " , date("h : m : s"),"<br>";

echo "Time is " , date("h/m/s"),"<br>";
echo "Time is " , date("s/m/s"),"<br>";
echo "Time is " , date("h,m,s"),"<br>";
echo "Time is " , date("h.m.s"),"<br>";
echo "Time is " , date("h-m-s"),"<br>";
echo "Time is " , date("h_m_s"),"<br>";

echo "<br> <br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

echo "<br> <br>";

date_default_timezone_set("India/Mumbai");
echo "The time is " . date("h:i:sa");









?>
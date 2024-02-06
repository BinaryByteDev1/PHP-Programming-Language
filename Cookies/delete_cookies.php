<?php


//  Delete   Cookie
//$cookie_name = "name";
//$cookie_value = "Waseem Ahmad ";


// if we want to delete the cookie we just set the past date / time of cookie it can automatically deleted

//Example 

setcookie("user" , "Hilal Ahmad" , time() - 3600);

//Get Cookies 
echo "<pre>";
print_r($_COOKIE);







?>
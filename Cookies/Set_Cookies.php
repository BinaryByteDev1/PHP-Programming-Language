<?php

//Set Cookies 

/*setcookie("name", "Hilal Ahmad ", time() + 3600
);

// Get Cookies

echo "<pre>";
print_r($_COOKIE);

*/


//  Set   Cookie
$cookie_name = "name";
$cookie_value = "Waseem Ahmad ";

//setcookie($cookie_name , cookie_value , time() + 3600);

//Get Cookies 

//echo $_COOKIE["name"];


// Set Cookies as array

setcookie("user[one]" , "Hilal Ahmad Ganie");
setcookie("user[two]" ,"Waseem Ahmad Ganie");
setcookie("user[three]" , "Aadil Ahmad Wani");
setcookie("user[four]" , "Abass Ahmad Khan");
setcookie("user[five]" , "Ather Ahmad Mir");

if(isset($_COOKIE["user"])){
    echo "<pre>";
    print_r($_COOKIE["user"]);
}










?>
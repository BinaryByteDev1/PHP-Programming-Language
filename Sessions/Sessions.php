<?php

// Set Sessiions in php

/*session_start();  // start the session
$_SESSION["User"] = "Hilal";
$_SESSION["Visit_User"] = 1;


//  Get Sessions in php
echo "<pre>";
echo $_SESSION["User"],"<br>";
echo $_SESSION["Visit_User"];
*/

session_start();

if(isset($_SESSION["Visit_User"])){
    $_SESSION["Visit_User"] += 1;
}
else{
    $_SESSION["Visit_User"] = 1;
    
}

$message = "You have visit this page " . $_SESSION["Visit_User"]. " in this Session.";

echo $message;










?>
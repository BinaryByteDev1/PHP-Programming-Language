<?php

session_start();

if(isset($_SESSION["Visit_User"])){
    $_SESSION["Visit_User"] += 1;
}
else{
    $_SESSION["Visit_User"] = 1;
    
}

$message = "You have visit this page " . $_SESSION["Visit_User"]. " in this Session.";

echo $message;


session_unset();       //  remove the session or delete the session using this function



session_destroy();      //  remove the session or delete the session using this function







?>
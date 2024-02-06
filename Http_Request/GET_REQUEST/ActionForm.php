<?php

/*$name = $_GET[name];
$email = $_GET[email];

echo "Name = ", $name;
echo"<br>";
echo "Email = ", $email;
// var_dump($_GET); 

echo "<pre>";
print_r($_GET);*/

if(!empty($_GET)){
    echo "Name = ",$_GET["name"];
    echo"<br>";
    echo "Email = ",$_GET["email"];
}else {
    
    echo "Please fill the form requirements !!!";
}

/*if(!empty($_REQUEST)){
    echo "Name = ",$_REQUEST["name"];
    echo"<br>";
    echo "Email = ",$_REQUEST["email"];
}else {
    
    echo "Please fill the form requirements !!!";
}*/

?>
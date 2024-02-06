<?php

/*$name = $_POST[name];
$email = $_POST[email];

echo "Name = ", $name;
echo"<br>";
echo "Email = ", $email;
// var_dump($_POST); 

echo "<pre>";
print_r($_POST);*/

/*if(!empty($_POST)){
    echo "Name = ",$_POST["name"];
    echo"<br>";
    echo "Email = ",$_POST["email"];
}else {
    
    echo "Please fill the form requirements !!!";
}*/




if(!empty($_REQUEST)){
    echo "Name = ",$_REQUEST["name"];
    echo"<br>";
    echo "Email = ",$_REQUEST["email"];
}else {
    
    echo "Please fill the form requirements !!!";
}



?>
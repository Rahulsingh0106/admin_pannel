<?php
$_server="localhost";
$username="root";
$password="";
$database="login&registration";

$con = mysqli_connect($_server, $username, $password, $database);
if ($con)
{
    
}
else {
    die("Error". mysqli_connect_error());
}
?>
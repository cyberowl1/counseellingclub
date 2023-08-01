<?php

$server = "localhost";
$username = "u462433949_root";
$password = "Pswrd123@";
$database = "u462433949_counselling";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($conn)
{
    echo "success";
}



?>